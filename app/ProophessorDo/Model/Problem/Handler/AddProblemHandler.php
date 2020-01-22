<?php


namespace Prooph\ProophessorDo\Model\Problem\Handler;

use App\ProophessorDo\Model\Answer\AnswerSequence;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryRepository;
use Illuminate\Support\Facades\Log;
use Prooph\ProophessorDo\Model\Answer\Answer;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryRepository;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class AddProblemHandler
{

    /**
     * @var ProblemRepository
     */
    protected $problemRepository;
    /**
     * @var AnswerRepository
     */
    private $answerRepository;
    /**
     * @var ProblemCategoryRepository
     */
    private $problemCategoryRepository;

    public function __construct(ProblemRepository $problemRepository, AnswerRepository $answerRepository, ProblemCategoryRepository $problemCategoryRepository)
    {
        $this->problemRepository = $problemRepository;
        $this->answerRepository = $answerRepository;
        $this->problemCategoryRepository = $problemCategoryRepository;
    }

    public function __invoke(AddProblem $command)
    {
        $problem = Problem::create(
            $command->problemId(),
            $command->text(),
            $command->referenceNumber(),
            $command->subjectId(),
            $command->formatId(),
            $command->difficultyId(),
            $command->createdBy(),
            $command->createdOn(),
            $command->section(),
            $command->categories(),
            $command->notes(),
            $command->answers(),
            $command->active()
        );

        $this->createAnswers($command->answers(), $command->problemId());
        $this->addCategoriesToProblem($command->categories(), $command->problemId());

        $this->problemRepository->add($problem);
    }

    private function createAnswers(Answers $answers, ProblemId $problemId)
    {
        foreach($answers->toArray() as $answer) {
            $answerAggregate = Answer::create(
                AnswerId::generate(),
                AnswerContent::fromString($answer->text),
                AnswerType::text(),
                AnswerChoice::fromString($answer->correct),
                $problemId,
                AnswerSequence::fromString($answer->sequence)
            );
            $this->answerRepository->add($answerAggregate);
        }
    }

    private function addCategoriesToProblem(
        Categories $categories,
        ProblemId $problemId
    ) {
        foreach ($categories->toArray() as $category) {
            $problemCategory = ProblemCategory::create(
                ProblemCategoryId::generate(),
                $problemId,
                CategoryId::fromString($category)
            );
            $this->problemCategoryRepository->add($problemCategory);
        }
    }

}