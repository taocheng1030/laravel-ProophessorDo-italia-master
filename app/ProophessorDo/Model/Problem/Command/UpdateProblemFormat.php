<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemFormat extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($problemId, $format)
    {
        return new self(
            [
                'problemId' => $problemId,
                'format' => $format
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function format()
    {
        return ProblemFormat::fromString($this->payload['format']);
    }
}