<?php


namespace App\ProophessorDo\Model\ProblemFormat;


use App\ProophessorDo\Model\ProblemFormat\Event\ProblemFormatWasAdded;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class ProblemFormat extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var ProblemFormatId
     */
    protected $problemFormatId;
    /**
     * @var ProblemFormatName
     */
    protected $name;
    /**
     * @var ProblemFormatActive
     */
    protected $active;

    public static function withData(
        ProblemFormatId $id,
        ProblemFormatName $name,
        ProblemFormatActive $active
    ): ProblemFormat
    {
        $self = new self();
        $self->recordThat(
            ProblemFormatWasAdded::withData(
                $id,
                $name,
                $active
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->problemFormatId->toString();
    }

    public function whenProblemFormatWasAdded(ProblemFormatWasAdded $event)
    {
        $this->problemFormatId = $event->problemFormatId();
        $this->name = $event->problemFormatName();
        $this->active = $event->problemFormatActive();
    }
}