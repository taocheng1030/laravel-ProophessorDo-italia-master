<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection;


use App\ProophessorDo\Model\ProblemSection\Event\ProblemSectionWasCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class ProblemSection extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var ProblemSectionId
     */
    protected $problemTypeId;

    public static function create(
        ProblemSectionId $problemTypeId,
        ProblemSectionName $name,
        ProblemSectionAbbreviation $abbreviation,
        SubjectId $subjectId
    ) {
        $self = new self();
        $self->recordThat(
            ProblemSectionWasCreated::withData(
                $problemTypeId,
                $name,
                $abbreviation,
                $subjectId
            )
        );
        return $self;
    }

    public function whenProblemSectionWasCreated(ProblemSectionWasCreated $event) {
        $this->problemTypeId = $event->problemTypeId();
        $this->name = $event->name();
        $this->abbreviation = $event->abbreviation();
        $this->subject_id = $event->subjectId();
        $this->active = true;
    }

    protected function aggregateId(): string
    {
        return $this->problemTypeId->toString();
    }
}