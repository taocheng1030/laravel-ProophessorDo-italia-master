<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemReferenceNumberHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemReferenceNumber $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateReferenceNumber(
            $command->problemId(),
            $command->referenceNumber()
        );
        $this->repository->add($problem);
    }
}