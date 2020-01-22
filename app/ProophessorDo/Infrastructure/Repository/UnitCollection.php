<?php


namespace App\ProophessorDo\Infrastructure\Repository;


use Prooph\EventSourcing\Aggregate\AggregateRepository;
use Prooph\ProophessorDo\Model\Unit\Unit;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitRepository;

class UnitCollection extends AggregateRepository implements UnitRepository
{

    public function add(Unit $unit)
    {
        $this->saveAggregateRoot($unit);
    }

    public function get(UnitId $unitId)
    {
        return $this->getAggregateRoot($unitId->toString());
    }
}