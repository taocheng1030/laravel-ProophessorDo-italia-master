<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson\Command;


use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonId;

class UpdateLessonDescription extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $lessonId,
        string $description
    ) {
        return new self(
            [
                'lesson_id' => $lessonId,
                'description' => $description
            ]
        );
    }

    public function lessonId()
    {
        return LessonId::fromString($this->payload['lesson_id']);
    }

    public function description()
    {
        return LessonDescription::fromString($this->payload['description']);
    }
}