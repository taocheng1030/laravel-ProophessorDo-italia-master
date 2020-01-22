<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\LessonType\Command;

use App\ProophessorDo\Model\LessonType\LessonTypeActive;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use App\ProophessorDo\Model\LessonType\LessonTypeLabel;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateLessonType extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $lessonTypeId,
        string $lessonLabel,
        string $lessonActive
    ) {
        return new self(
            [
                'id' => $lessonTypeId,
                'label' => $lessonLabel,
                'active' => $lessonActive
            ]
        );
    }

    public function lessonId()
    {
        return LessonTypeId::fromString($this->payload['id']);
    }

    public function label()
    {
        return LessonTypeLabel::withString($this->payload['label']);
    }

    public function active()
    {
        return LessonTypeActive::withString($this->payload['active']);
    }
}