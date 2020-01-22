<?php

namespace Tests\Unit\EventSourcing\Model\Student\Event;

use App\EventSourcing\Model\Student\Event\StudentWasCreated;
use Prooph\ProophessorDo\Model\Student\Student;
use Prooph\ProophessorDo\Model\Student\StudentId;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class StudentWasCreatedTest extends TestCase
{
    public function testStudentWasCreated()
    {
        $userId = UserId::generate();
        $student = Student::create(
            StudentId::generate(),
            $userId
        );
        self::assertInstanceOf(Student::class, $student);
        $events = $this->popRecordedEvent($student);
        self::assertCount(1, $events);
        /**
         * @var StudentWasCreated $event
         */
        $event = $events[0];
        self::assertInstanceOf(StudentWasCreated::class, $event);

        $expectedResult = [
            'user_id' => $userId->toString()
        ];
        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(StudentId::class, $event->studentId());
        self::assertInstanceOf(UserId::class, $event->userId());
    }
}
