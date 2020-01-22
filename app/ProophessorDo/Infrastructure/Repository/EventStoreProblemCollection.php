<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Infrastructure\Repository;

use Prooph\ProophessorDo\Model\Problem\Problem;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class EventStoreProblemCollection extends AggregateRepository implements ProblemRepository
{
    /**
     * @param Problem $problem
     */
    public function add(Problem $problem)
    {
        $this->saveAggregateRoot($problem);
    }

    /**
     * @param ProblemId $problemId
     * @return object|null
     */
    public function get(ProblemId $problemId): Problem
    {
        return $this->getAggregateRoot($problemId->toString());
    }
}