<?php

namespace Tests\Unit\EventSourcing\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Problem\Command\AddProblem;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemSection;
use Prooph\ProophessorDo\Model\Problem\ProblemTags;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Ramsey\Uuid\Uuid;
use Tests\Unit\TestCase;

class AddProblemTest extends TestCase
{
    /**
     * @var AddProblem
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = AddProblem::withData(
            ProblemId::generate()->toString(),
            ProblemText::fromString("Test Text")->toString(),
            ProblemReferenceNumber::fromString("")->toString(),
            SubjectId::fromString(Uuid::uuid4()->toString())->toString(),
            ProblemFormat::multipleChoice()->toString(),
            ProblemDifficulty::fromInt(2)->toString(),
            UserId::fromString(Uuid::uuid4()->toString())->toString(),
            ProblemCreatedOn::generate()->toString(),
            ProblemSection::fromString("Something")->toString(),
            ProblemTags::fromString("Trig")->toString(),
            ProblemNotes::fromString("This is a note")->toString(),
            Answers::fromArray()->addAnswer(
                    AnswerContent::fromString('Answer 1'),
                    AnswerChoice::correct()
                )->addAnswer(
                    AnswerContent::fromString('Answer 2'),
                    AnswerChoice::incorrect()
                )
                ->toString(),
            ProblemActive::active()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testPhoneId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }
}
