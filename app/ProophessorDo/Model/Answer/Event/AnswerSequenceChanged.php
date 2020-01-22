<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Event;

use App\ProophessorDo\Model\Answer\AnswerSequence;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class AnswerSequenceChanged extends AggregateChanged
{

    /**
     * @var AnswerId
     */
    protected $answerId;

    /**
     * @var AnswerSequence
     */
    protected $sequence;

    public static function withData(
        AnswerId $answerId,
        AnswerSequence $oldSequence,
        AnswerSequence $sequence
    ) {
        $event = self::occur(
            $answerId->toString(),
            [
                'old_sequence' => $oldSequence->toString(),
                'sequence' => $sequence->toString()
            ]
        );
        return $event;
    }

    public function answerId()
    {
        if (!$this->answerId) {
            $this->answerId = AnswerId::fromString($this->aggregateId());
        }
        return $this->answerId;
    }

    public function sequence()
    {
        if (!$this->sequence) {
            $this->sequence = AnswerSequence::fromString($this->payload['sequence']);
        }
        return $this->sequence;
    }
}