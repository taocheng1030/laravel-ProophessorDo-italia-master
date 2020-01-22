<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats\Handler;

use App\ProophessorDo\Model\ProblemStats\Command\CreateProblemStats;
use App\ProophessorDo\Model\ProblemStats\ProblemStats;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsRepository;

class CreateProblemStatsHandler
{
    /**
     * @var ProblemStatsRepository
     */
    private $repository;

    public function __construct(ProblemStatsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateProblemStats $command)
    {
        $problemStats = ProblemStats::create(
            $command->problemStatsId(),
            $command->problemId(),
            $command->correct(),
            $command->incorrect(),
            $command->skipped(),
            $command->pending()
        );
        $this->repository->add($problemStats);
    }
}