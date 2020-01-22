<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemFormatTest extends TestCase
{
    /**
     * @var UpdateProblemFormat
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemFormat::withData(
            ProblemId::generate()->toString(),
            ProblemFormat::multipleChoice()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testFormat()
    {
        self::assertInstanceOf(ProblemFormat::class, $this->command->format());
    }
}
