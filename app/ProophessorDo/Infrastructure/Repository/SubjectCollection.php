<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use Prooph\EventSourcing\Aggregate\AggregateRepository;
use Prooph\ProophessorDo\Model\Subject\Subject;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectRepository;

class SubjectCollection extends AggregateRepository implements SubjectRepository
{

    public function add(Subject $subject)
    {
        $this->saveAggregateRoot($subject);
    }

    public function get(SubjectId $subjectId)
    {
        $this->getAggregateRoot($subjectId->toString());
    }
}