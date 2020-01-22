<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class UpdateProblemSubjectId extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($problemId, $subjectId)
    {
        return new self(
            [
                'problemId' => $problemId,
                'subjectId' => $subjectId
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subjectId']);
    }
}