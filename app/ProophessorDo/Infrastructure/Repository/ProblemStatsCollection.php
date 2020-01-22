<?php


namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\ProblemStats\ProblemStats;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsId;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class ProblemStatsCollection extends AggregateRepository implements ProblemStatsRepository
{

    public function add(ProblemStats $problemStats)
    {
        $this->saveAggregateRoot($problemStats);
    }

    public function get(ProblemStatsId $problemStatsId): ProblemStats
    {
        return $this->getAggregateRoot($problemStatsId);
    }
}