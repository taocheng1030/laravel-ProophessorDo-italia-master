<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\LessonType\Handler;


use App\ProophessorDo\Model\LessonType\Command\CreateLessonType;
use App\ProophessorDo\Model\LessonType\LessonType;
use App\ProophessorDo\Model\LessonType\LessonTypeRepository;

class CreateLessonTypeHandler
{
    /**
     * @var LessonTypeRepository
     */
    private $repository;

    public function __construct(LessonTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateLessonType $command)
    {
        $lessonType = LessonType::create(
            $command->lessonId(),
            $command->label(),
            $command->active()
        );

        $this->repository->add($lessonType);
    }
}