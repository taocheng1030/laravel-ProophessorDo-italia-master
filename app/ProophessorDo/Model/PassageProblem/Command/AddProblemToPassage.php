<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Command;

use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\PassageProblem\PassageProblemSequence;
use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class AddProblemToPassage extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $passageProblemId,
        string $passageId,
        string $problemId,
        string $sequence
    ){
        return new self(
            [
                'passage_problem_id' => $passageProblemId,
                'passage_id' => $passageId,
                'problem_id' => $problemId,
                'sequence' => $sequence
            ]
        );
    }

    public function passageProblemId()
    {
        return PassageProblemId::fromString($this->payload['passage_problem_id']);
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function sequence()
    {
        return PassageProblemSequence::fromString($this->payload['sequence']);
    }
}