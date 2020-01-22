<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Subject;

use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Illuminate\Support\Facades\Log;
use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Model\Subject\Event\SubjectWasCreated;

class SubjectProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    SubjectWasCreated::class => function ($state, SubjectWasCreated $event) {
                        $readModel = $this->readModel();
                        Log::info($event->payload());

                        $readModel->stack(
                            'insert',
                            [
                                'id' => $event->aggregateId(),
                                'name' => $event->subjectName()->toString()
                            ]
                        );
                    }
                ]
            );
        return $projector;
    }
}