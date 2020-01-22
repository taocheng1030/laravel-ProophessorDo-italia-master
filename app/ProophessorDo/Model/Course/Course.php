<?php


namespace App\ProophessorDo\Model\Course;


use App\ProophessorDo\Model\Course\Event\CourseWasCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Entity;

class Course extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var CourseId
     */
    protected $courseId;

    /**
     * @var CourseName
     */
    protected $name;

    /**
     * @var CourseRefId
     */
    protected $referenceId;

    public static function create(
        CourseId $courseId,
        CourseRefId $referenceId,
        CourseName $name
    ) {
        $self = new self();
        $self->recordThat(
            CourseWasCreated::withData(
                $courseId,
                $referenceId,
                $name
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->courseId->toString();
    }

    public function whenCourseWasCreated(CourseWasCreated $event)
    {
        $this->courseId = $event->courseId();
        $this->name = $event->name();
        $this->referenceId = $event->referenceId();
    }
}