<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection\Command;

use App\ProophessorDo\Model\ProblemSection\ProblemSectionAbbreviation;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionId;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class CreateProblemSection extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemTypeId,
        string $problemTypeName,
        string $abbreviation,
        string $subjectId
    ): self
    {
        return new self(
            [
                'problem_type_id' => $problemTypeId,
                'name' => $problemTypeName,
                'abbreviation' => $abbreviation,
                'subject_id' => $subjectId
            ]
        );
    }

    public function problemTypeId()
    {
        return ProblemSectionId::fromString($this->payload['problem_type_id']);
    }

    public function name()
    {
        return ProblemSectionName::fromString($this->payload['name']);
    }

    public function abbreviation()
    {
        return ProblemSectionAbbreviation::fromString($this->payload['abbreviation']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }
}