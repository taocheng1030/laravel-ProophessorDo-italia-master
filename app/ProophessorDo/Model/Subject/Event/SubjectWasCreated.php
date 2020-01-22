<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Subject\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;

class SubjectWasCreated extends AggregateChanged
{

    public static function withData(
        SubjectId $subjectId,
        SubjectName $subjectName
    ) {
        $event = self::occur(
            $subjectId->toString(),
            [
                'subject_name' => $subjectName->toString()
            ]
        );
        return $event;
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->aggregateId());
    }

    public function subjectName()
    {
        return SubjectName::fromString($this->payload['subject_name']);
    }
}