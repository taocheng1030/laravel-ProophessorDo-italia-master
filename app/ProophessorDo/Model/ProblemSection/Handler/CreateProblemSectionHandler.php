<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection\Handler;

use App\ProophessorDo\Model\ProblemSection\Command\CreateProblemSection;
use App\ProophessorDo\Model\ProblemSection\ProblemSection;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionRepository;

class CreateProblemSectionHandler
{
    /**
     * @var ProblemSectionRepository
     */
    private $repository;

    public function __construct(ProblemSectionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateProblemSection $command)
    {
        $problemType = ProblemSection::create(
            $command->problemTypeId(),
            $command->name(),
            $command->abbreviation(),
            $command->subjectId()
        );
        $this->repository->add($problemType);
    }
}