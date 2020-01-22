<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

use App\EventSourcing\Model\LessonSection\Event\LessonSectionWasCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class LessonSection extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var LessonSectionId
     */
    protected $lessonSectionId;

    /**
     * @var LessonSectionReferenceId
     */
    protected $referenceId;

    /**
     * @var LessonSectionName
     */
    protected $name;

    /**
     * @var LessonSectionActive
     */
    protected $active;

    public static function create(
        LessonSectionId $lessonSectionId,
        LessonSectionReferenceId $referenceId,
        LessonSectionName $name,
        LessonSectionActive $active
    ) {
        $self = new self();
        $self->recordThat(
            LessonSectionWasCreated::withData(
                $lessonSectionId,
                $referenceId,
                $name,
                $active
            )
        );
        return $self;
    }


    protected function aggregateId(): string
    {
        return $this->lessonSectionId->toString();
    }

    public function whenLessonSectionWasCreated(LessonSectionWasCreated $event)
    {
        $this->lessonSectionId  = $event->lessonSectionId();
        $this->referenceId = $event->referenceId();
        $this->name = $event->name();
        $this->active = $event->active();
    }
}