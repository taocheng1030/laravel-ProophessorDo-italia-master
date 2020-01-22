<?php

namespace Tests\Unit\EventSourcing\Model\Problem\Handler;

use App\ProophessorDo\Model\Section\SectionId;
use Mockery;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\Handler\AddProblemHandler;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;
use Prooph\ProophessorDo\Model\Problem\ProblemTags;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Ramsey\Uuid\Uuid;
use Tests\Unit\TestCase;

class AddProblemHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    protected $problemRepository;

    /**
     * @var AddProblemHandler
     */
    protected $handler;

    /**
     * @var AnswerRepository|Mockery\Mock
     */
    private $answerRepository;

    protected function setUp()
    {
        parent::setUp();
        $this->problemRepository = Mockery::mock(ProblemRepository::class);
        $this->answerRepository = Mockery::mock(AnswerRepository::class);
        $this->handler = new AddProblemHandler($this->problemRepository, $this->answerRepository);
    }

    public function testInvoke()
    {
        $command = AddProblem::withData(
            ProblemId::generate()->toString(),
            ProblemText::fromString("Test Text")->toString(),
            ProblemReferenceNumber::fromString("")->toString(),
            SubjectId::fromString(Uuid::uuid4()->toString())->toString(),
            ProblemFormat::multipleChoice()->toString(),
            ProblemDifficulty::fromString(2)->toString(),
            UserId::fromString(Uuid::uuid4()->toString())->toString(),
            ProblemCreatedOn::generate()->toString(),
            SectionId::generate()->toString(),
            Categories::fromArray()->addCategory(
                CategoryId::generate()
            )->addCategory(CategoryId::generate())->toString(),
            ProblemNotes::fromString("This is a note")->toString(),
            Answers::fromArray()->addAnswer(
                AnswerContent::fromString('Answer 1'),
                AnswerChoice::incorrect()
            )->addAnswer(
                AnswerContent::fromString('Answer 2'),
                AnswerChoice::correct()
            )->toString(),
            ProblemActive::inactive()->toString()
        );
        $this->problemRepository->shouldReceive('add')->once();
        $this->answerRepository->shouldReceive('add')->twice();
        self::assertNull($this->handler->__invoke($command));
    }
}
