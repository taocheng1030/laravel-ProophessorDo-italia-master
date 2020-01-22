<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\PassageSubjects\PassageSubject;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class PassageSubjectCollection extends AggregateRepository implements PassageSubjectRepository
{

    public function add(PassageSubject $passageSubject)
    {
        $this->saveAggregateRoot($passageSubject);
    }

    public function get(PassageSubjectId $passageSubjectId): PassageSubject
    {
        return $this->getAggregateRoot($passageSubjectId);
    }
}