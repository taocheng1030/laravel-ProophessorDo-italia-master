<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\LessonProblem;

use App\EventSourcing\Model\LessonProblems\Event\ProblemWasAddedToLesson;
use App\LessonProblem;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class LessonProblemProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    ProblemWasAddedToLesson::class => function($state, ProblemWasAddedToLesson $event) {
                        $problemLessons = new LessonProblem();
                        $problemLessons->id = $event->lessonProblemId()->toString();
                        $problemLessons->lesson_id = $event->lessonId()->toString();
                        $problemLessons->problem_id = $event->problemId()->toString();
                        $problemLessons->lesson_type_id = $event->lessonTypeId()->toString();
                        $problemLessons->sequence = $event->sequence()->toString();
                        $problemLessons->page = $event->page()->toString();
                        $problemLessons->active = $event->active()->toString();
                        $problemLessons->save();
                    }
                ]
            );
        return $projector;
    }
}