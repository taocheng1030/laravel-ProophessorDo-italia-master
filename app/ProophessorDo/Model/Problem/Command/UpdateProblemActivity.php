<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemActivity extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($problemId, $problemActivity)
    {
        return new self(
            [
                'problem_id' => $problemId,
                'activity' => $problemActivity
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function activity()
    {
        return ProblemActive::fromString($this->payload['activity']);
    }
}