<?php


namespace App\ProophessorDo\Model\Lesson\Event;


use App\ProophessorDo\Model\Lesson\LessonReferenceId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Lesson\LessonId;

class UpdateLessonReferenceId extends Command implements PayloadConstructable
{
    use PayloadTrait;


    public static function withData(string $lessonId, string $lessonReferenceId)
    {
        return new self(
            [
                'lesson_id' => $lessonId,
                'lesson_reference_id' => $lessonReferenceId
            ]
        );
    }

    public function lessonId()
    {
        return LessonId::fromString($this->payload['lesson_id']);
    }

    public function lessonReferenceId()
    {
        return LessonReferenceId::fromString($this->payload['lesson_reference_id']);
    }
}