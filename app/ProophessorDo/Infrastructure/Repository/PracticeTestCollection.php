<?php


namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\PracticeTest\PracticeTest;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class PracticeTestCollection extends AggregateRepository implements PracticeTestRepository
{

    public function add(PracticeTest $practiceTest)
    {
        $this->saveAggregateRoot($practiceTest);
    }

    public function get(PracticeTestId $id)
    {
        return $this->getAggregateRoot($id->toString());
    }
}