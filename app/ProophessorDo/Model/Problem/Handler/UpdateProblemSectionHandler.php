<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSection;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemSectionHandler
{
    /**
     * @var ProblemRepository
     */
    private $repository;

    public function __construct(ProblemRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdateProblemSection $command)
    {
        $problem = $this->repository->get($command->problemId());
        $problem->updateSectionId($command->sectionId());
        $this->repository->add($problem);
    }
}