<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemDifficulty extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($problemId, $difficulty)
    {
        return new self(
            [
                'problemId' => $problemId,
                'difficulty' => $difficulty
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function difficulty()
    {
        return ProblemDifficulty::fromString($this->payload['difficulty']);
    }
}