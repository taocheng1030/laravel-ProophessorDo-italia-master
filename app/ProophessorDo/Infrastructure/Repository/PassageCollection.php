<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\Passages\Passage;
use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class PassageCollection extends AggregateRepository implements PassageRepository
{

    public function add(Passage $passage)
    {
        $this->saveAggregateRoot($passage);
    }

    public function get(PassageId $passageId): Passage
    {
        return $this->getAggregateRoot($passageId->toString());
    }
}