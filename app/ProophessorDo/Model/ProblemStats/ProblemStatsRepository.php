<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;

interface ProblemStatsRepository
{
    public function add(ProblemStats $problemStats);
    public function get(ProblemStatsId $problemStatsId): ProblemStats;
}