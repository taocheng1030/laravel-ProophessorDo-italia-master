<?php

namespace Tests\Unit\EventSourcing\Model\PracticeTest\Event;

use App\ProophessorDo\Model\PracticeTest\Event\PracticeTestCreated;
use App\ProophessorDo\Model\PracticeTest\PracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestDescription;
use App\ProophessorDo\Model\PracticeTest\PracticeTestFormCode;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestName;
use App\ProophessorDo\Model\PracticeTest\PracticeTestReferenceId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class PracticeTestCreatedTest extends TestCase
{
    public function testPracticeTestWasAdded()
    {

        $id = PracticeTestId::generate();
        $name = PracticeTestName::fromString('test1');
        $description = PracticeTestDescription::fromString('this is the description');
        $formCode = PracticeTestFormCode::fromString('61B');
        $referenceId = PracticeTestReferenceId::fromString('RefId1');
        $testId = TestId::generate();
        $userId = UserId::generate();
        $practiceTest = PracticeTest::create(
            $id,
            $name,
            $description,
            $formCode,
            $referenceId,
            $testId,
            $userId
        );
        self::assertInstanceOf(PracticeTest::class, $practiceTest);
        $events = $this->popRecordedEvent($practiceTest);

        /**
         * @var PracticeTestCreated $event
         */
        $event = $events[0];
        self::assertInstanceOf(PracticeTestCreated::class, $event);
        self::assertInstanceOf(AggregateChanged::class, $event);

        $expectedResult = [
            'name' => $name->toString(),
            'description' => $description->toString(),
            'formCode' => $formCode->toString(),
            'referenceId' => $referenceId->toString(),
            'testId' => $testId->toString(),
            'createdBy' => $userId->toString()
        ];
        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(PracticeTestId::class, $event->practiceTestId());
        self::assertInstanceOf(PracticeTestName::class, $event->name());
        self::assertInstanceOf(PracticeTestDescription::class, $event->description());
        self::assertInstanceOf(PracticeTestFormCode::class, $event->formCode());
        self::assertInstanceOf(PracticeTestReferenceId::class, $event->referenceId());
        self::assertInstanceOf(TestId::class, $event->testId());
        self::assertInstanceOf(UserId::class, $event->createdBy());
    }
}
