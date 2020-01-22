<?php

namespace Tests\Unit\EventSourcing\Model\PracticeTest\Command;

use App\ProophessorDo\Model\PracticeTest\Command\CreatePracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestDescription;
use App\ProophessorDo\Model\PracticeTest\PracticeTestFormCode;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestName;
use App\ProophessorDo\Model\PracticeTest\PracticeTestReferenceId;
use App\ProophessorDo\Model\Test\TestId;
use PHPUnit\Framework\TestCase;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\User\UserId;

class CreatePracticeTestTest extends TestCase
{
    /**
     * @var CreatePracticeTest
     */
    protected $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreatePracticeTest::withData(
            PracticeTestId::generate()->toString(),
            PracticeTestName::fromString('test1')->toString(),
            PracticeTestDescription::fromString('this is the description')->toString(),
            PracticeTestFormCode::fromString('61B')->toString(),
            PracticeTestReferenceId::fromString('RefId1')->toString(),
            TestId::generate()->toString(),
            UserId::generate()->toString()
        );
        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testPracticeTestId()
    {
        self::assertInstanceOf(PracticeTestId::class, $this->command->practiceTestId());
    }

    public function testName()
    {
        self::assertInstanceOf(PracticeTestName::class, $this->command->name());
    }

    public function testDescription()
    {
        self::assertInstanceOf(PracticeTestDescription::class, $this->command->description());
    }

    public function testForCode()
    {
        self::assertInstanceOf(PracticeTestFormCode::class, $this->command->formCode());
    }

    public function testReferenceId()
    {
        self::assertInstanceOf(PracticeTestReferenceId::class, $this->command->referenceId());
    }

    public function testTestId()
    {
        self::assertInstanceOf(TestId::class, $this->command->testId());
    }

    public function testCreatedBy()
    {
        self::assertInstanceOf(UserId::class, $this->command->userId());
    }
}
