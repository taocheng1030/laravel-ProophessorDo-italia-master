<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems\Handler;

use App\EventSourcing\Model\LessonProblems\Command\AddProblemToLesson;
use App\EventSourcing\Model\LessonProblems\LessonProblem;
use App\EventSourcing\Model\LessonProblems\LessonProblemRepository;

class AddProblemToLessonHandler
{
    /**
     * @var LessonProblemRepository
     */
    private $repository;

    public function __construct(LessonProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(AddProblemToLesson $command)
    {
        $lessonProblem = LessonProblem::withData(
            $command->lessonProblemId(),
            $command->lessonId(),
            $command->problemId(),
            $command->lessonTypeId(),
            $command->sequence(),
            $command->page(),
            $command->active()
        );

        $this->repository->add($lessonProblem);
    }
}