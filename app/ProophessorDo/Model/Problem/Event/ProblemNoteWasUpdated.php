<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;

class ProblemNoteWasUpdated extends AggregateChanged
{

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var ProblemNotes
     */
    protected $note;

    public static function withData(ProblemId $problemId, ProblemNotes $oldNote, ProblemNotes $note)
    {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldNote' => $oldNote->toString(),
                'note' => $note->toString()
            ]
        );
        $event->note = $note;
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }

    public function note()
    {
        if (!$this->note) {
            $this->note = ProblemNotes::fromString($this->payload['note']);
        }
        return $this->note;
    }
}