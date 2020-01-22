<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Handler;

use App\ProophessorDo\Model\PassageProblem\Command\ChangePassageProblemSequence;
use App\ProophessorDo\Model\PassageProblem\PassageProblemRepository;

class ChangePassageProblemSequenceHandler
{
    /**
     * @var PassageProblemRepository
     */
    private $repository;

    public function __construct(PassageProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(ChangePassageProblemSequence $command)
    {
        $passageProblem = $this->repository->get($command->passageProblemId());
        $passageProblem->changeSequence(
            $command->sequence()
        );
        $this->repository->add($passageProblem);
    }
}