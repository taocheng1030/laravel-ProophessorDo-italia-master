<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Unit\Handler;

use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\Unit;
use Prooph\ProophessorDo\Model\Unit\UnitRepository;

class CreateUnitHandler
{
    /**
     * @var UnitRepository
     */
    protected $repository;

    public function __construct(UnitRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateUnit $command)
    {
        $unit = Unit::create(
            $command->unitId(),
            $command->label(),
            $command->multiLineLabel(),
            $command->referenceId(),
            $command->subjectId(),
            $command->createdBy()
        );
        $this->repository->add($unit);
    }
}