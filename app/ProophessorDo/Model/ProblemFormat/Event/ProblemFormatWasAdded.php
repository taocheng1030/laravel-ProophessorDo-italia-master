<?php


namespace App\ProophessorDo\Model\ProblemFormat\Event;


use App\ProophessorDo\Model\ProblemFormat\ProblemFormatActive;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatId;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatName;
use Prooph\EventSourcing\AggregateChanged;

class ProblemFormatWasAdded extends AggregateChanged
{

    /**
     * @var ProblemFormatId
     */
    protected $problemFormatId;
    /**
     * @var ProblemFormatName
     */
    protected $problemFormatName;
    /**
     * @var ProblemFormatActive
     */
    protected $problemFormatActive;

    public static function withData(
        ProblemFormatId $id,
        ProblemFormatName $name,
        ProblemFormatActive $active
    ) {
        /**
         * @var ProblemFormatWasAdded $event
         */
        $event = self::occur(
            $id->toString(),
            [
                'name' => $name->toString(),
                'active' => $active->toString()
            ]
        );
        $event->problemFormatId = $id;
        $event->problemFormatName = $name;
        $event->problemFormatActive = $active;
        return $event;
    }

    public function problemFormatId()
    {
        if (!$this->problemFormatId) {
            $this->problemFormatId = ProblemFormatId::fromString($this->aggregateId());
        }
        return $this->problemFormatId;
    }

    public function problemFormatName()
    {
        if (!$this->problemFormatName) {
            $this->problemFormatName = ProblemFormatName::fromString($this->payload['name']);
        }
        return $this->problemFormatName;
    }

    public function problemFormatActive()
    {
        if (!$this->problemFormatActive) {
            $this->problemFormatActive = ProblemFormatActive::fromBoolean($this->payload['active']);
        }
        return $this->problemFormatActive;
    }
}