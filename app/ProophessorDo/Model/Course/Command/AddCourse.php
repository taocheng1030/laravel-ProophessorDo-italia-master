<?php


namespace App\ProophessorDo\Model\Course\Command;


use App\ProophessorDo\Model\Course\CourseId;
use App\ProophessorDo\Model\Course\CourseName;
use App\ProophessorDo\Model\Course\CourseRefId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class AddCourse extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(string $courseName, string $courseRefId, string $courseId) {
        return new self(
            [
                'name' => $courseName,
                'ref_id' => $courseRefId,
                'course_id' => $courseId
            ]
        );
    }

    public function name()
    {
        return CourseName::fromString($this->payload['name']);
    }

    public function referenceId()
    {
        return CourseRefId::fromString($this->payload['ref_id']);
    }

    public function courseId()
    {
        return CourseId::fromString($this->payload['course_id']);
    }
}