<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\Answer;

use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use PHPUnit\Framework\TestCase;
use Prooph\Common\Messaging\Command;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class CreateAnswerTest extends TestCase
{
    /**
     * @var CreateAnswer
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateAnswer::withData(
            AnswerId::generate()->toString(),
            AnswerContent::fromString('This is the content')->toString(),
            AnswerType::text()->toString(),
            AnswerChoice::correct()->toString(),
            ProblemId::generate()->toString()
        );

        self::assertInstanceOf(Command::class, $this->command);
    }

    public function testAnswerId()
    {
        self::assertInstanceOf(AnswerId::class, $this->command->answerId());
    }

    public function testContent()
    {
        self::assertInstanceOf(AnswerContent::class, $this->command->content());
    }

    public function testType()
    {
        self::assertInstanceOf(AnswerType::class, $this->command->type());
    }

    public function testChoice()
    {
        self::assertInstanceOf(AnswerChoice::class, $this->command->correctChoice());
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }
}
