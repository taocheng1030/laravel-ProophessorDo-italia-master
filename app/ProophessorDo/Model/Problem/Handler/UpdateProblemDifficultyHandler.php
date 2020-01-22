<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemDifficultyHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemDifficulty $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateDifficulty(
            $command->difficulty()
        );
        $this->repository->add($problem);
    }
}