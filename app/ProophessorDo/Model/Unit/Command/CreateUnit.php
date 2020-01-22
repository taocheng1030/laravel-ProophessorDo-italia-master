<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Unit\Command;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\User\UserId;

class CreateUnit extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $unitId,
        string $name,
        string $multiLineLabel,
        string $referenceId,
        string $subjectId,
        string $createdBy
    ) {
        return new self(
            [
                'unit_id' => $unitId,
                'name' => $name,
                'multi_line_label' => $multiLineLabel,
                'reference_id' => $referenceId,
                'subject_id' => $subjectId,
                'user_id' => $createdBy
            ]
        );
    }

    public function unitId()
    {
        return UnitId::fromString($this->payload['unit_id']);
    }

    public function label()
    {
        return UnitLabel::fromString($this->payload['name']);
    }

    public function multiLineLabel()
    {
        return UnitMultiLineLabel::fromString($this->payload['multi_line_label']);
    }

    public function referenceId()
    {
        return UnitReferenceId::fromString($this->payload['reference_id']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }

    public function createdBy()
    {
        return UserId::fromString($this->payload['user_id']);
    }
}