<?php
namespace Tests\Unit\EventSourcing\Model\Lesson;

use Prooph\ProophessorDo\Model\Lesson\Event\LessonWasCreated;
use Prooph\ProophessorDo\Model\Lesson\Lesson;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedBy;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedOn;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonEstimatedDuration;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonStatus;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Lesson\LessonUpdatedOn;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Ramsey\Uuid\Uuid;
use Tests\Unit\TestCase;

class LessonWasCreatedTest extends TestCase
{
    public function testLessonWasCreated()
    {
        $lessonType = LessonType::reading();
        $unitId = UnitId::generate();
        $status = LessonStatus::dueLater();
        $name = LessonName::fromString('Lesson #1');
        $description = LessonDescription::fromString('This is a description');
        $estimatedDuration = LessonEstimatedDuration::fromMinutes(90);
        $createdBy = LessonCreatedBy::fromString(Uuid::uuid4()->toString());
        $createdOn = LessonCreatedOn::generate();
        $updatedOn = LessonUpdatedOn::generate();
        $lesson = Lesson::create(
            LessonId::generate(),
            $lessonType,
            $unitId,
            $status,
            $name,
            $description,
            $estimatedDuration,
            $createdBy,
            $createdOn,
            $updatedOn
        );
        self::assertInstanceOf(Lesson::class, $lesson);
        $events = $this->popRecordedEvent($lesson);
        self::assertCount(1, $events);

        /**
         * @var LessonWasCreated $event
         */
        $event = $events[0];
        self::assertInstanceOf(LessonWasCreated::class, $event);

        $expectedResult = [
            'lesson_type' => $lessonType->toString(),
            'unit_id' => $unitId->toString(),
            'status' => $status->toString(),
            'name' => $name->toString(),
            'description' => $description->toString(),
            'estimated_duration' => $estimatedDuration->toString(),
            'created_by' => $createdBy->toString(),
            'created_on' => $createdOn->toString(),
            'updated_on' => $updatedOn->toString()
        ];

        self::assertEquals($expectedResult, $event->payload());
        self::assertInstanceOf(LessonId::class, $event->lessonId());
        self::assertInstanceOf(LessonType::class, $event->lessonType());
        self::assertInstanceOf(UnitId::class, $event->unitId());
        self::assertInstanceOf(LessonStatus::class, $event->status());
        self::assertInstanceOf(LessonName::class, $event->name());
        self::assertInstanceOf(LessonDescription::class, $event->description());
        self::assertInstanceOf(LessonEstimatedDuration::class, $event->estimatedDuration());
        self::assertInstanceOf(LessonCreatedBy::class, $event->createdBy());
        self::assertInstanceOf(LessonCreatedOn::class, $event->createdOn());
        self::assertInstanceOf(LessonUpdatedOn::class, $event->updatedOn());
    }
}
