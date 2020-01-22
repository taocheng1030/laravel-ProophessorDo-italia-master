<?php


namespace App\ProophessorDo\Model\PassageSubjects;


use App\ProophessorDo\Model\PassageSubjects\Event\PassageSubjectWasAdded;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class PassageSubject extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var PassageSubjectId
     */
    protected $passageSubjectId;

    /**
     * @var PassageSubjectLabel
     */
    protected $label;

    /**
     * @var PassageSubjectAbbreviation
     */
    protected $abbreviation;

    /**
     * @var PassageSubjectActive
     */
    protected $active;

    public static function create(
        PassageSubjectId $passageSubjectId,
        PassageSubjectLabel $label,
        PassageSubjectAbbreviation $abbreviation,
        PassageSubjectActive $active
    ) {
        $self = new self();
        $self->recordThat(
            PassageSubjectWasAdded::withData(
                $passageSubjectId,
                $label,
                $abbreviation,
                $active
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->passageSubjectId->toString();
    }

    public function whenPassageSubjectWasAdded(PassageSubjectWasAdded $event)
    {
        $this->passageSubjectId = $event->passageSubjectId();
        $this->label = $event->label();
        $this->abbreviation = $event->abbreviation();
        $this->active = $event->active();
    }
}