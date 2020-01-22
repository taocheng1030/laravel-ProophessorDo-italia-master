<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\LessonSection;

use App\EventSourcing\Model\LessonSection\Event\LessonSectionWasCreated;
use App\LessonSection;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class LessonSectionProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    LessonSectionWasCreated::class => function($state, LessonSectionWasCreated $event) {
                        LessonSection::flushCache();
                        $lessonSection = new LessonSection();
                        $lessonSection->id = $event->lessonSectionId()->toString();
                        $lessonSection->reference_id = $event->referenceId()->toString();
                        $lessonSection->name = $event->name()->toString();
                        $lessonSection->active = $event->active()->toString();
                        $lessonSection->save();
                    }
                ]
            );
        return $projector;
    }
}