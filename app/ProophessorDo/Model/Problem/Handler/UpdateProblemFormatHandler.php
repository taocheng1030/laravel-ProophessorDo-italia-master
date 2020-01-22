<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemFormatHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemFormat $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateFormat(
            $command->format()
        );
        $this->repository->add($problem);
    }
}