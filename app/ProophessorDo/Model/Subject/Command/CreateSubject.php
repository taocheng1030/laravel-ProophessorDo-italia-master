<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Subject\Command;

use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Subject\SubjectName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateSubject extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $subjectId,
        string $subjectName
    ) {
        return new self(
            [
                'subject_id' => $subjectId,
                'name' => $subjectName
            ]
        );
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }

    public function subjectName()
    {
        return SubjectName::fromString($this->payload['name']);
    }
}