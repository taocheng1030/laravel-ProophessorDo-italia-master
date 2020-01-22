<?php


namespace App\ProophessorDo\Projection\ProblemFormat;


use App\ProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\Event\ProblemFormatWasAdded;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class ProblemFormatProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    ProblemFormatWasAdded::class => function ($state, ProblemFormatWasAdded $event) {
                        $readModel = $this->readModel();
                        ProblemFormat::flushCache();
                        $problemFormat = new ProblemFormat();
                        $problemFormat->id = $event->problemFormatId()->toString();
                        $problemFormat->name = $event->problemFormatName()->toString();
                        $problemFormat->active = $event->problemFormatActive()->toString();
                        $readModel->stack(
                            'insert',
                            $problemFormat
                        );
                    }
                ]
            );
        return $projector;
    }
}