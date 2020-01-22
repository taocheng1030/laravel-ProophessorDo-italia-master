<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\ProblemStats\Command\CreateProblemStats;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsId;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Video\VideoId;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Command\AddVideoToProblem;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\ServiceBus\CommandBus;
use Ramsey\Uuid\Uuid;

class portQuestions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:questions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    /**
     * @var Connection
     */
    protected $connectionNewDb;
    /**
     * @var Connection
     */
    private $connectionOldDb;
    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * Create a new command instance.
     *
     * @param DatabaseManager $databaseManager
     */
    public function __construct(DatabaseManager $databaseManager, CommandBus $commandBus)
    {
        parent::__construct();
        $this->connectionOldDb = $databaseManager->connection('old_cc');
        $this->connectionNewDb = $databaseManager->connection();
        $this->commandBus = $commandBus;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $problems = $this->connectionOldDb
            ->select("SELECT * FROM `rsatproblem`");

        foreach ($problems as $problem) {
            try {
                $correctAnswer = $this->connectionOldDb->table('rsatproblemanswer')
                    ->select('answer')
                    ->where(['rsatproblemid' => $problem->id, 'deleted' => 0])
                    ->first();

                $problemFormat = (ctype_alpha($correctAnswer->answer)) ? ProblemFormat::multipleChoice() : ProblemFormat::fillInTheBlank();

                $problemTags = $this->connectionOldDb->table('rsatproblemtag')->join('rsattag', 'rsatproblemtag.rsattagid', '=','rsattag.id')->where('rsatproblemid', $problem->id)->get();

                if ($problemTags->count() === 0) {
                    continue;
                } else {
                    $oldSubjectLabel = $this->connectionOldDb->table('subject')->where('id',
                        $problemTags->first()->subjectid)->pluck("label");

                    $newSubject = $this->connectionNewDb->table('read_subject')->where('name',
                        $oldSubjectLabel)->value('id');

                    $problemTags = $problemTags->map(function ($element) {
                        return $element->label;
                    });

                    $categories = $this->connectionNewDb->table('read_category')->orWhereIn('name',
                        $problemTags)->pluck('id');

                    $section = $this->connectionNewDb->table('read_course')->select('id')->where('name',
                        'SAT')->first();

                    $video = $this->connectionOldDb->table('video')->where('id', $problem->videoid)->value('filename');

                    $mp4Video = str_replace(".flv", ".mp4", $video);

                    $newVideo = $this->connectionNewDb->table('read_video')->where('name', $mp4Video)->value('id');

                    $answers = $this->getContents($problem->code, '<a>', '</a>');

                    $addProblemCommand = AddProblem::withData(
                        ProblemId::generate()->toString(),
                        ProblemText::fromString($this->parseCode($problem->code, $problem->id))->toString(),
                        ProblemReferenceNumber::fromString($problem->id)->toString(),
                        (Uuid::isValid($newSubject)) ? SubjectId::fromString($newSubject)->toString() : SubjectId::generate()->toString(),
                        $problemFormat->toString(),
                        ProblemDifficulty::fromInt((int)(strlen((string)$problem->difficulty) == 1) ? 1 : (int)substr((string)$problem->difficulty,
                            0, 1))->toString(),
                        UserId::generate()->toString(),
                        ProblemCreatedOn::generate()->toString(),
                        ($section) ? SectionId::fromString($section->id)->toString() : SectionId::generate()->toString(),
                        Categories::fromArray($categories->toArray())->toString(),
                        ProblemNotes::fromString($problem->administrativenotes)->toString(),
                        Answers::fromArray(
                            $this->parseAnswers($answers, $correctAnswer)
                        )->toString(),
                        ProblemActive::fromString($problem->active)->toString()
                    );

                    $this->commandBus->dispatch($addProblemCommand);

                    if ($newVideo) {
                        $addVideoToProblemCommand = AddVideoToProblem::withData(
                            $addProblemCommand->problemId()->toString(),
                            $newVideo
                        );

//                        $this->commandBus->dispatch($addVideoToProblemCommand);
                    }


                    $addProblemStatsCommand = CreateProblemStats::withData(
                        ProblemStatsId::generate()->toString(),
                        $addProblemCommand->problemId()->toString(),
                        $problem->correct,
                        $problem->incorrect,
                        $problem->skipped,
                        $problem->pending
                    );
//                    $this->commandBus->dispatch($addProblemStatsCommand);
                }
            } catch (Exception $exception) {
                dd($exception);
            }
        }
    }

    private function parseCode($code)
    {
        $code = str_replace("<problem>", "", $code);
        $code = str_replace("</problem>", "", $code);

        $code = preg_replace('#(<a.*?>).*?(</a>)#', '', $code);
        return $code;
    }

    private function parseAnswers($answers, $correctAnswer)
    {
        $parsedAnswers = [];
        foreach ($answers as $key => $answer) {
            $parsedAnswers[] = [
                'text' => $answer,
                'correct' => (strtolower($correctAnswer->answer) === $key),
                'sequence' => count($parsedAnswers) + 1
            ];
        }
        return $parsedAnswers;
    }

    function getContents($str, $startDelimiter, $endDelimiter) {
        $questionLetters = ['a', 'b', 'c', 'd', 'e'];
        $contents = array();
        $startDelimiterLength = strlen($startDelimiter);
        $endDelimiterLength = strlen($endDelimiter);
        $startFrom = $contentStart = $contentEnd = 0;
        while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
            $contentStart += $startDelimiterLength;
            $contentEnd = strpos($str, $endDelimiter, $contentStart);
            if (false === $contentEnd) {
                break;
            }
            $newAnswer = str_replace(".", "",
                trim(substr($str, $contentStart, $contentEnd - $contentStart)));

            if (strlen($newAnswer) > 0) {
                try {
                    $contents[$questionLetters[count($contents)]] = $newAnswer;
                    $startFrom = $contentEnd + $endDelimiterLength;
                } catch (Exception $exception) {
                    dd(
                        [
                            'message' => $exception->getMessage(),
                            'string' => $str,
                            'contents' => $contents,
                            'new answer' => $newAnswer
                        ]
                    );
                }
            } else {
                $startFrom = $contentEnd + $endDelimiterLength;
            }
        }

        return $contents;
    }
}
