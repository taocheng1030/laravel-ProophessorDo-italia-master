<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemSubjectIdHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemSubjectId $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateSubjectId(
            $command->subjectId()
        );
        $this->repository->add($problem);
    }
}