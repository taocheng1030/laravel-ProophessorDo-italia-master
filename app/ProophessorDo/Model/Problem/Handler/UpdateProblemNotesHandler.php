<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemNotesHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemNotes $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateNote(
            $command->note()
        );
        $this->repository->add($problem);
    }
}