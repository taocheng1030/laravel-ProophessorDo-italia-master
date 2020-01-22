<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageProblem\Event;

use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use App\ProophessorDo\Model\PassageProblem\PassageProblemSequence;
use Prooph\EventSourcing\AggregateChanged;

class PassageProblemSequenceWasChanged extends AggregateChanged
{

    /**
     * @var PassageProblemId
     */
    private $passageProblemId;

    /**
     * @var PassageProblemSequence
     */
    private $sequence;

    public static function withData(
        PassageProblemId $passageProblemId,
        PassageProblemSequence $oldSequence,
        PassageProblemSequence $sequence
    ) {
        $event = self::occur(
            $passageProblemId->toString(),
            [
                'old_sequence' => $oldSequence,
                'sequence' => $sequence
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

    public function sequence()
    {
        if (!$this->sequence) {
            $this->sequence = PassageProblemSequence::fromString($this->payload['sequence']);
        }
        return $this->sequence;
    }
}