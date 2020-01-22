<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class DeleteProblem extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(string $problemId)
    {
        return new self(
            [
                'problem_id' => $problemId
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }
}