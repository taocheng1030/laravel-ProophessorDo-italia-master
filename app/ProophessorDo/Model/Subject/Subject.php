<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Subject;

use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\Subject\Event\SubjectWasCreated;
use Ramsey\Uuid\UuidInterface;

class Subject extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var SubjectName
     */
    protected $name;

    /**
     * @var UuidInterface
     */
    protected $uuid;

    /**
     * @param SubjectId $subjectId
     * @param SubjectName $subjectName
     * @return Subject
     */
    public static function create(
        SubjectId $subjectId,
        SubjectName $subjectName
    ): Subject {
        $self = new self();

        $self->recordThat(
            SubjectWasCreated::withData(
                $subjectId,
                $subjectName
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->subjectId->toString();
    }

    /**
     * @param SubjectWasCreated $event
     */
    public function whenSubjectWasCreated(SubjectWasCreated $event)
    {
        $this->uuid = $event->uuid();
        $this->subjectId = $event->subjectId();
        $this->name = $event->subjectName();
    }
}