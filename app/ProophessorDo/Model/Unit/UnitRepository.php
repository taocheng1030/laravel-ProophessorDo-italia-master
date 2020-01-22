<?php


namespace Prooph\ProophessorDo\Model\Unit;


interface UnitRepository
{
    public function add(Unit $unit);
    public function get(UnitId $unitId);
}