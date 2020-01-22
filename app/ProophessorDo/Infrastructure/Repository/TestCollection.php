<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\Test\Test;
use App\ProophessorDo\Model\Test\TestId;
use App\ProophessorDo\Model\Test\TestRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class TestCollection extends AggregateRepository implements TestRepository
{

    public function add(Test $test)
    {
        $this->saveAggregateRoot($test);
    }

    public function get(TestId $testId)
    {
        $this->getAggregateRoot($testId->toString());
    }
}