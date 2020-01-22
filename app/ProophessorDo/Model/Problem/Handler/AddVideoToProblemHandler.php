<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\AddVideoToProblem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class AddVideoToProblemHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(AddVideoToProblem $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->addVideo($command->videoId());

        $this->repository->add($problem);
    }
}