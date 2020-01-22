<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Command;

use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\PassageProblem\PassageProblemSequence;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class ChangePassageProblemSequence extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        string $passageProblemId,
        string $sequence
    ) {
        return new self(
            [
                'passage_problem_id' => $passageProblemId,
                'sequence' => $sequence
            ]
        );
    }

    public function passageProblemId()
    {
        return PassageProblemId::fromString($this->payload['passage_problem_id']);
    }

    public function sequence()
    {
        return PassageProblemSequence::fromString($this->payload['sequence']);
    }
}