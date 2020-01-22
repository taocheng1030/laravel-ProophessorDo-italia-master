<?php


namespace App\ProophessorDo\Projection\ProblemStats;


use App\ProblemStats;
use App\ProophessorDo\Model\ProblemStats\Event\ProblemStatsCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class ProblemStatsProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')->when(
            [
                ProblemStatsCreated::class => function($state, ProblemStatsCreated $event) {
                    $readModel = $this->readModel();
                    ProblemStats::flushCache();
                    $problemStats = new ProblemStats();
                    $problemStats->id = $event->problemStatsId()->toString();
                    $problemStats->problem_id = $event->problemId()->toString();
                    $problemStats->correct = $event->correct()->toString();
                    $problemStats->incorrect = $event->incorrect()->toString();
                    $problemStats->skipped = $event->skipped()->toString();
                    $problemStats->pending = $event->pending()->toString();
                    $readModel->stack(
                        'insert',
                        $problemStats
                    );
                }
            ]
        );
        return $projector;
    }
}