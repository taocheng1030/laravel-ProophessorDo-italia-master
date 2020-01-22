<?php


namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\ProblemCategory\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class ProblemCategoryCollection extends AggregateRepository implements ProblemCategoryRepository
{
    public function add(ProblemCategory $problemCategory) {
        $this->saveAggregateRoot($problemCategory);
    }

    public function get(ProblemCategoryId $problemCategoryId): ProblemCategory
    {
        return $this->getAggregateRoot($problemCategoryId->toString());
    }
}