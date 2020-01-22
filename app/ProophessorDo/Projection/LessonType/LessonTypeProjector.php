<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\LessonType;


use App\LessonType;
use App\ProophessorDo\Model\LessonType\Event\LessonTypeCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class LessonTypeProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                LessonTypeCreated::class => function($state, LessonTypeCreated $event) {
                    $lessonType = new LessonType();
                    $lessonType->id = $event->lessonTypeId()->toString();
                    $lessonType->label = $event->label()->toString();
                    $lessonType->active = $event->active()->toString();
                    $lessonType->save();
                }
            ]);
        return $projector;
    }
}