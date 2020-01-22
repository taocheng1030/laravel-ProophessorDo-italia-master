<?php


namespace App\ProophessorDo\Model\Passages\Event;


use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\EventSourcing\AggregateChanged;

class PassageWasDeleted extends AggregateChanged
{

    /**
     * @var PassageId
     */
    protected $passageId;

    public static function withData(PassageId $passageId)
    {
        $event = self::occur(
            $passageId->toString()
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
}