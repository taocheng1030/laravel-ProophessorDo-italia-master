<?php


namespace Prooph\ProophessorDo\Model\Student\Command;


use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Student\StudentId;
use Prooph\ProophessorDo\Model\User\UserId;

class CreateStudent extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($studentId, $userId)
    {
        return new self(
            [
                'student_id' => $studentId,
                'user_id' => $userId
            ]
        );
    }

    public function studentId()
    {
        return StudentId::fromString($this->payload['student_id']);
    }

    public function userId()
    {
        return UserId::fromString($this->payload['user_id']);
    }
}