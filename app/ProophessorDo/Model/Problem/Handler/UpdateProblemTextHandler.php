<?php


namespace App\ProophessorDo\Model\Problem\Handler;


use App\ProophessorDo\Model\Problem\Command\UpdateProblemText;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemTextHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemText $command)
    {
        /**
         * @var Problem $problem
         */
        $problem = $this->repository->get($command->problemId());
        $problem->updateText($command->text());
        $this->repository->add($problem);
    }
}