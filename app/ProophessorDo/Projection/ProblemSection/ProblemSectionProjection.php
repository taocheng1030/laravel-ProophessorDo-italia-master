<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\ProblemSection;

use App\ProblemSection;
use App\ProophessorDo\Model\ProblemSection\Event\ProblemSectionWasCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class ProblemSectionProjection implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    ProblemSectionWasCreated::class => function($state, ProblemSectionWasCreated $event) {
                        ProblemSection::flushCache();
                        $problemType = new ProblemSection();
                        $problemType->id = $event->aggregateId();
                        $problemType->name = $event->name()->toString();
                        $problemType->abbreviation = $event->abbreviation()->toString();
                        $problemType->subject_id = $event->subjectId()->toString();
                        $problemType->save();
                    }
                ]
            );
        return $projector;
    }
}