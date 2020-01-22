<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\DeleteProblem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class DeleteProblemHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(DeleteProblem $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->delete();
        $this->repository->add($problem);
    }
}