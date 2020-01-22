<?php


namespace App\EventSourcing\Model\Student\Event;


use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Student\StudentId;
use Prooph\ProophessorDo\Model\User\UserId;

class StudentWasCreated extends AggregateChanged
{

    /**
     * @var StudentId
     */
    protected $studentId;

    /**
     * @var UserId
     */
    protected $userId;

    public static function withData(
        StudentId $studentId,
        UserId $userId
    ) {
        $event = self::occur(
            $studentId->toString(),
            [
                'user_id' => $userId->toString()
            ]
        );
        return $event;
    }

    public function studentId()
    {
        if (!$this->studentId) {
            $this->studentId = StudentId::fromString($this->aggregateId());
        }
        return $this->studentId;
    }

    public function userId()
    {
        if (!$this->userId) {
            $this->userId = UserId::fromString($this->payload['user_id']);
        }
        return $this->userId;
    }
}