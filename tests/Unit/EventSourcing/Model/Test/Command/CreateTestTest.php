<?php
declare(strict_types=1);

use App\ProophessorDo\Model\Test\TestId;
use App\ProophessorDo\Model\Test\TestName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Test\Command\CreateTest;
use Tests\Unit\TestCase;

class CreateTestTest extends TestCase
{
    /**
     * @var CreateTest
     */
    private $command;

    public function setUp()
    {
        parent::setUp();
        $this->command = CreateTest::withDate(
            TestId::generate()->toString(),
            TestName::fromString('SAT')->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testTestId()
    {
        self::assertInstanceOf(TestId::class, $this->command->testId());
    }

    public function testTestName()
    {
        self::assertInstanceOf(TestName::class, $this->command->name());
    }
}
