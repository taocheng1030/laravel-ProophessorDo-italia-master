<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemActivity;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemActivityTest extends TestCase
{
    /**
     * @var UpdateProblemActivity
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemActivity::withData(
            ProblemId::generate()->toString(),
            ProblemActive::active()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testActivity()
    {
        self::assertInstanceOf(ProblemActive::class, $this->command->activity());
    }
}
