<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Event;

use App\ProophessorDo\Model\PassageProblem\PassageProblem;
use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\PassageProblem\PassageProblemSequence;
use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemAddedToPassage extends AggregateChanged
{
    /**
     * @var PassageProblemId
     */
    private $passageProblemId;

    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var PassageId
     */
    private $passageId;

    /**
     * @var PassageProblemSequence
     */
    private $sequence;

    public static function withData(
        PassageProblemId $passageProblemId,
        PassageId $passageId,
        ProblemId $problemId,
        PassageProblemSequence $sequence
    ) {
        $event = self::occur(
            $passageProblemId->toString(),
            [
                'passage_id' => $passageId->toString(),
                'problem_id' => $problemId->toString(),
                'sequence' => $sequence->toString()
            ]
        );
        return $event;
    }

    public function passageProblemId()
    {
        if (!$this->passageProblemId) {
            $this->passageProblemId = PassageProblemId::fromString($this->aggregateId());
        }
        return $this->passageProblemId;
    }

    public function passageId()
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->payload['passage_id']);
        }
        return $this->passageId;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->payload['problem_id']);
        }
        return $this->problemId;
    }

    public function sequence()
    {
        if (!$this->sequence) {
            $this->sequence = PassageProblemSequence::fromString($this->payload['sequence']);
        }
        return $this->sequence;
    }
}