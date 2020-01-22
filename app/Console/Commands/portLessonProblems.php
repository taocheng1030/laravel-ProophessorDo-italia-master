<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\EventSourcing\Model\LessonProblems\Command\AddProblemToLesson;
use App\EventSourcing\Model\LessonProblems\LessonProblemActive;
use App\EventSourcing\Model\LessonProblems\LessonProblemId;
use App\EventSourcing\Model\LessonProblems\LessonProblemPage;
use App\EventSourcing\Model\LessonProblems\LessonProblemSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Illuminate\Console\Command;
use Illuminate\Database\DatabaseManager;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ServiceBus\CommandBus;

class portLessonProblems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'port:lessonProblems';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * @var \Illuminate\Database\Connection
     */
    private $connectionOldDb;

    /**
     * @var \Illuminate\Database\Connection
     */
    private $connectionNewDb;

    /**
     * @var CommandBus
     */
    private $commandBus;

    /**
     * Create a new command instance.
     *
     * @param DatabaseManager $databaseManager
     * @param CommandBus $commandBus
     */
    public function __construct(
        DatabaseManager $databaseManager,
        CommandBus $commandBus
    ) {
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
        $lessonProblems = $this->connectionOldDb->table('rsatlessonproblem')
            ->get();
        foreach ($lessonProblems as $lessonProblem) {
            $lesson = $this->connectionNewDb->table('read_lesson')->where('reference_id', $lessonProblem->rsatlessonid)->value('id');
            $problem = $this->connectionNewDb->table('read_problem')->where('reference_number', $lessonProblem->rsatproblemid)->value('id');
            $lessonSectionId = $this->connectionOldDb->table('rsatlessonsectiontype')->where('id', $lessonProblem->rsatlessonsectiontypeid)->value('id');
            $lessonSection = $this->connectionNewDb->table('read_lesson_section')->where('reference_id', $lessonSectionId)->value('id');
            $command = AddProblemToLesson::withData(
                LessonProblemId::generate()->toString(),
                LessonId::fromString($lesson)->toString(),
                ProblemId::fromString($problem)->toString(),
                LessonTypeId::fromString($lessonSection)->toString(),
                LessonProblemSequence::fromString((string)$lessonProblem->sequence)->toString(),
                LessonProblemPage::fromString($lessonProblem->page)->toString(),
                LessonProblemActive::fromString((string)$lessonProblem->invalid)->toString()
            );
            $this->commandBus->dispatch($command);
        }
    }
}
