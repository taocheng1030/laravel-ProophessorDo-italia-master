<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Event;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use Prooph\EventSourcing\AggregateChanged;

class PassageNotesUpdated extends AggregateChanged
{

    /**
     * @var PassageId
     */
    private $passageId;
    private $notes;

    public static function withData(
        PassageId $passageId,
        PassageNotes $oldPassageNotes,
        PassageNotes $passageNotes
    ) {
        $event = self::occur(
            $passageId->toString(),
            [
                'old_passage_notes' => $oldPassageNotes->toString(),
                'passage_notes' => $passageNotes->toString()
            ]
        );
        return $event;
    }

    public function passageId()
    {
        if (!$this->passageId) {
            $this->passageId = PassageId::fromString($this->aggregateId());
        }
        return $this->passageId;
    }

    public function passageNotes()
    {
        if (!$this->notes) {
            $this->notes = PassageNotes::fromString($this->payload['passage_notes']);
        }
        return $this->notes;
    }
}