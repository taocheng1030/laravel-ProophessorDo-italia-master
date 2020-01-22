<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;

class UpdateProblemNotes extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(string $problemId, string $note)
    {
        return new self(
            [
                'problemId' => $problemId,
                'note' => $note
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function note()
    {
        return ProblemNotes::fromString($this->payload['note']);
    }
}