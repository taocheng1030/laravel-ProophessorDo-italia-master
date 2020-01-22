<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Lesson\Handler;

use Prooph\ProophessorDo\Model\Lesson\Command\CreateLesson;
use Prooph\ProophessorDo\Model\Lesson\Lesson;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;

class CreateLessonHandler
{
    /**
     * @var LessonRepository
     */
    protected $repository;

    public function __construct(LessonRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateLesson $command)
    {
        $lesson = Lesson::create(
            $command->lessonId(),
            $command->referenceId(),
            $command->lessonTypeId(),
            $command->sequence(),
            $command->subjectId(),
            $command->unitId(),
            $command->name(),
            $command->multiLineTitle(),
            $command->description(),
            $command->startingPage(),
            $command->endingPage(),
            $command->challengePage(),
            $command->practicePage(),
            $command->drillPage(),
            $command->createdBy(),
            $command->status()
        );
        $this->repository->add($lesson);
    }
}