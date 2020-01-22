<?php
declare(strict_types=1);

namespace Tests\Unit\EventSourcing\Model\Lesson\Command;

use PHPUnit\Framework\TestCase;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
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

class CreateLessonTest extends TestCase
{
    /**
     * @var CreateLesson
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = CreateLesson::withData(
            LessonId::generate()->toString(),
            LessonType::reading()->toString(),
            UnitId::generate()->toString(),
            LessonStatus::dueLater()->toString(),
            LessonName::fromString('Adjectives And Adverbs Lesson')->toString(),
            LessonDescription::fromString('This is a long description')->toString(),
            LessonEstimatedDuration::fromMinutes(90)->toString(),
            LessonCreatedBy::fromString(Uuid::uuid4()->toString())->toString(),
            LessonCreatedOn::generate()->toString(),
            LessonUpdatedOn::generate()->toString()
        );

        self::assertInstanceOf(Command::class, $this->command);
        self::assertInstanceOf(PayloadConstructable::class, $this->command);
    }

    public function testLessonId()
    {
        self::assertInstanceOf(LessonId::class, $this->command->lessonId());
    }

    public function testLessonType()
    {
        self::assertInstanceOf(LessonType::class, $this->command->lessonType());
    }

    public function testUnitId()
    {
        self::assertInstanceOf(UnitId::class, $this->command->unitId());
    }

    public function testStatus()
    {
        self::assertInstanceOf(LessonStatus::class, $this->command->status());
    }

    public function testName()
    {
        self::assertInstanceOf(LessonName::class, $this->command->name());
    }

    public function testDescription()
    {
        self::assertInstanceOf(LessonDescription::class, $this->command->description());
    }

    public function testEstimatedDuration()
    {
        self::assertInstanceOf(LessonEstimatedDuration::class, $this->command->estimatedDuration());
    }

    public function testCreatedBy()
    {
        self::assertInstanceOf(LessonCreatedBy::class, $this->command->createdBy());
    }

    public function testCreatedOn()
    {
        self::assertInstanceOf(LessonCreatedOn::class, $this->command->createdOn());
    }

    public function testUpdatedOn()
    {
        self::assertInstanceOf(LessonUpdatedOn::class, $this->command->updatedOn());
    }
}
