<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;

class UpdateProblemNotesTest extends TestCase
{
    /**
     * @var UpdateProblemNotes
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemNotes::withData(
            ProblemId::generate()->toString(),
            ProblemNotes::fromString('this is a note')->toString()
        );

        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testProductId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testNote()
    {
        self::assertInstanceOf(ProblemNotes::class, $this->command->note());
    }
}
