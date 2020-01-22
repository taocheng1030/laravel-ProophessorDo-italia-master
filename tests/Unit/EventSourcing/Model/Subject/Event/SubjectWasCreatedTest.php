<?php

namespace Tests\Unit\EventSourcing\Model\Subject\Event;

use Prooph\ProophessorDo\Model\Lesson\Event\SubjectWasCreated;
use Prooph\ProophessorDo\Model\Subject\Subject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;
use Tests\Unit\TestCase;

class SubjectWasCreatedTest extends TestCase
{
    public function testSubjectWasCreated()
    {
        $subjectName = SubjectName::fromString('test');
        $subject = Subject::create(
            SubjectId::generate(),
            $subjectName
        );
        self::assertInstanceOf(Subject::class, $subject);

        $events = $this->popRecordedEvent($subject);
        self::assertCount(1, $events);

        /**
         * @var SubjectWasCreated $event
         */
        $event = $events[0];
        self::assertInstanceOf(SubjectWasCreated::class, $event);

        $expectedResult = [
            'subject_name' => $subjectName->toString()
        ];

        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(SubjectId::class, $event->subjectId());
        self::assertInstanceOf(SubjectName::class, $event->subjectName());
    }
}
