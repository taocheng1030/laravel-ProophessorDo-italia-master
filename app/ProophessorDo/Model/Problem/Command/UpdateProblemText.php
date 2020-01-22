<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Problem\Command;


use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemText;

class UpdateProblemText extends Command implements PayloadConstructable
{

    use PayloadTrait;

    public static function withData(string $problemId, string $problemText)
    {
        return new self(
            [
                'problem_id' => $problemId,
                'text' => $problemText
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function text()
    {
        return ProblemText::fromString($this->payload['text']);
    }
}