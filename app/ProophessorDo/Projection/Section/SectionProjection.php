<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Section;

use App\EventSourcing\Model\Section\Event\SectionWasCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class SectionProjection implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    SectionWasCreated::class => function ($state, SectionWasCreated $event) {
                        $readModel = $this->readModel();
                        $readModel->stack(
                            'insert',
                            [
                                'id' => $event->sectionId()->toString(),
                                'name' => $event->name()->toString()
                            ]
                        );
                    }
                ]
            );
        return $projector;
    }
}