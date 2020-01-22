<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson\Handler;


use App\ProophessorDo\Model\Lesson\Command\UpdateLessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;

class UpdateLessonDescriptionHandler
{
    /**
     * @var LessonRepository
     */
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepository)
    {
        $this->lessonRepository = $lessonRepository;
    }

    public function __invoke(UpdateLessonDescription $command)
    {
        $lesson = $this->lessonRepository->get($command->lessonId());
        $lesson->updateDescription($command->description());
        $this->lessonRepository->add($lesson);
    }
}