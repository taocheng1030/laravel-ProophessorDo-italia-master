<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\PassageProblem\PassageProblem;
use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\PassageProblem\PassageProblemRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class PassageProblemCollection extends AggregateRepository implements PassageProblemRepository
{

    /**
     * @param PassageProblem $passageProblem
     * @return null
     */
    public function add(PassageProblem $passageProblem)
    {
        $this->saveAggregateRoot($passageProblem);
    }

    /**
     * @param PassageProblemId $passageProblemId
     * @return PassageProblem
     */
    public function get(PassageProblemId $passageProblemId): PassageProblem
    {
        return $this->getAggregateRoot($passageProblemId->toString());
    }
}