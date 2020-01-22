<?php


namespace App\ProophessorDo\Projection\Unit;


use App\Unit;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Model\Unit\Event\UnitWasCreated;

class UnitProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                UnitWasCreated::class => function($state, UnitWasCreated $event) {
                    Unit::flushCache();
                    $unit = new Unit();
                    $unit->id = $event->aggregateId();
                    $unit->name = $event->name()->toString();
                    $unit->multi_line_label = $event->multiLineLabel()->toString();
                    $unit->reference_id = $event->referenceId()->toString();
                    $unit->subject_id = $event->subjectId()->toString();
                    $unit->created_by = $event->createBy()->toString();
                    $unit->save();
                }
            ]);
        return $projector;
    }
}