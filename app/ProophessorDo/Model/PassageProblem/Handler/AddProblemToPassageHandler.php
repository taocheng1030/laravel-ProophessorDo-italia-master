<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Handler;

use App\ProophessorDo\Model\PassageProblem\Command\AddProblemToPassage;
use App\ProophessorDo\Model\PassageProblem\PassageProblem;
use App\ProophessorDo\Model\PassageProblem\PassageProblemRepository;

class AddProblemToPassageHandler
{
    /**
     * @var PassageProblemRepository
     */
    private $repository;

    public function __construct(PassageProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(AddProblemToPassage $command)
    {
        $passageProblem = PassageProblem::create(
            $command->passageProblemId(),
            $command->passageId(),
            $command->problemId(),
            $command->sequence()
        );

        $this->repository->add($passageProblem);
    }
}