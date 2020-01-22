<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Course;

use App\Course;
use App\ProophessorDo\Model\Course\Event\CourseWasCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class CourseProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    CourseWasCreated::class => function($state, CourseWasCreated $event) {
                        $readModel = $this->readModel();
                        $course = new Course();
                        $course->id = $event->courseId()->toString();
                        $course->reference_id = $event->referenceId()->toString();
                        $course->name = $event->name()->toString();
                        $readModel->stack(
                            'insert',
                            $course
                        );
                    }
                ]
            );
        return $projector;
    }
}