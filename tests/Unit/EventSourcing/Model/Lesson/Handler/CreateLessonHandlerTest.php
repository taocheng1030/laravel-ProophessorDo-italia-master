<?php
declare(strict_types=1);

namespace Tests\Unit\EventSourcing\Model\Lesson;

use Mockery;
use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Lesson\Handler\CreateLessonHandler;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedBy;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedOn;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonEstimatedDuration;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;
use Prooph\ProophessorDo\Model\Lesson\LessonStatus;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Lesson\LessonUpdatedOn;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Ramsey\Uuid\Uuid;
use Tests\Unit\TestCase;

class CreateLessonHandlerTest extends TestCase
{
    /**
     * @var LessonRepository|Mockery\Mock
     */
    protected $repository;

    /**
     * @var CreateLessonHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(LessonRepository::class);
        $this->handler = new CreateLessonHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateLesson::withData(
            LessonId::generate()->toString(),
            LessonType::reading()->toString(),
            UnitId::generate()->toString(),
            LessonStatus::dueLater()->toString(),
            LessonName::fromString('Lesson #1')->toString(),
            LessonDescription::fromString('This is a description')->toString(),
            LessonEstimatedDuration::fromMinutes(90)->toString(),
            LessonCreatedBy::fromString(Uuid::uuid4()->toString())->toString(),
            LessonCreatedOn::generate()->toString(),
            LessonUpdatedOn::generate()->toString()
        );
        $this->repository->shouldReceive('set')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
