<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson\Handler;

use App\ProophessorDo\Model\Lesson\Event\UpdateLessonReferenceId;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;

class UpdateLessonReferenceIdHandler
{
    /**
     * @var LessonRepository
     */
    private $repository;

    public function __construct(LessonRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateLessonReferenceId $command)
    {
        $lesson = $this->repository->get($command->lessonId());
        $lesson->updateReferenceId($command->lessonReferenceId());
        $this->repository->add($lesson);
    }
}