<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Unit\Event;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use DateTimeImmutable;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\User\UserId;

class UnitWasCreated extends AggregateChanged
{

    public static function withData(
        UnitId $unitId,
        UnitLabel $unitName,
        UnitMultiLineLabel $multiLineLabel,
        UnitReferenceId $referenceId,
        SubjectId $subjectId,
        UserId $createdBy
    ) {
        $event = self::occur(
            $unitId->toString(),
            [
                'name' => $unitName->toString(),
                'multi_line_label' => $multiLineLabel->toString(),
                'reference_id' => $referenceId->toString(),
                'subject_id' => $subjectId->toString(),
                'createdBy' => $createdBy->toString()
            ]
        );
        return $event;
    }

    public function unitId()
    {
        return UnitId::fromString($this->aggregateId());
    }

    public function name()
    {
        return UnitLabel::fromString($this->payload['name']);
    }

    public function referenceId()
    {
        return UnitReferenceId::fromString($this->payload['reference_id']);
    }

    public function multiLineLabel()
    {
        return UnitMultiLineLabel::fromString($this->payload['multi_line_label']);
    }

    public function createBy()
    {
        return UserId::fromString($this->payload['createdBy']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }
}