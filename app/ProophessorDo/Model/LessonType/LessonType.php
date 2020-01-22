<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\LessonType;


use App\ProophessorDo\Model\LessonType\Event\LessonTypeCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class LessonType extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var LessonTypeId
     */
    protected $lessonTypeId;

    /**
     * @var LessonTypeLabel
     */
    protected $label;

    /**
     * @var LessonTypeActive
     */
    protected $active;

    public static function create(
        LessonTypeId $lessonId,
        LessonTypeLabel $label,
        LessonTypeActive $active
    ) {
        $self = new self();
        $self->recordThat(
            LessonTypeCreated::withData(
                $lessonId,
                $label,
                $active
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->lessonTypeId->toString();
    }

    public function whenLessonTypeCreated(LessonTypeCreated $event)
    {
        $this->lessonTypeId = $event->lessonTypeId();
        $this->label = $event->label();
        $this->active = $event->active();
    }
}