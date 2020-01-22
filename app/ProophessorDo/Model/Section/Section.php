<?php


namespace App\ProophessorDo\Model\Section;


use App\EventSourcing\Model\Section\Event\SectionWasCreated;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class Section extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var SectionId
     */
    private $sectionId;

    /**
     * @var SectionName
     */
    private $name;

    /**
     * @var SubjectId
     */
    private $subjectId;

    public static function create(SectionId $sectionId, SectionName $name)
    {
        $self = new self();
        $self->recordThat(
            SectionWasCreated::withData(
                $sectionId,
                $name
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->sectionId->toString();
    }

    public function whenSectionWasCreated(SectionWasCreated $event) {
        $this->sectionId = $event->sectionId();
        $this->name = $event->name();
    }
}