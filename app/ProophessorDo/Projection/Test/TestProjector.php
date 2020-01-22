<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Test;

use App\ProophessorDo\Model\Test\Event\TestWasCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class TestProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                TestWasCreated::class => function($state, TestWasCreated $event) {
                    $readModel = $this->readModel();
                    $readModel->stack(
                        'insert',
                        [
                            'id' => $event->aggregateId(),
                            'name' => $event->name()->toString(),
                        ]
                    );
                }
            ]);
        return $projector;
    }
}