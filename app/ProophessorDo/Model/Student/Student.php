<?php


namespace Prooph\ProophessorDo\Model\Student;


use App\EventSourcing\Model\Student\Event\StudentWasCreated;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\User\UserId;
use Ramsey\Uuid\UuidInterface;

class Student extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var StudentId
     */
    protected $studentId;

    /**
     * @var UserId
     */
    protected $userId;

    /**
     * @var UuidInterface
     */
    protected $uuid;

    public static function create(
        StudentId $studentId,
        UserId $userId
    ) {
        $self = new self();
        $self->recordThat(
            StudentWasCreated::withData(
                $studentId,
                $userId
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        $this->studentId->toString();
    }

    public function whenStudentWasCreated(StudentWasCreated $event)
    {
        $this->uuid = $event->uuid();
        $this->studentId = $event->studentId();
        $this->userId = $event->userId();
    }
}