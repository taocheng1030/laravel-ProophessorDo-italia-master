<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection\Command;

use App\EventSourcing\Model\LessonSection\LessonSectionActive;
use App\EventSourcing\Model\LessonSection\LessonSectionId;
use App\EventSourcing\Model\LessonSection\LessonSectionName;
use App\EventSourcing\Model\LessonSection\LessonSectionReferenceId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateLessonSection extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        string $lessonSectionId,
        string $lessonSectionReferenceId,
        string $lessonSectionName,
        string $lessonSectionActive
    ) {
        return new self(
            [
                'id' => $lessonSectionId,
                'reference_id' => $lessonSectionReferenceId,
                'name' => $lessonSectionName,
                'active' => $lessonSectionActive
            ]
        );
    }

    public function lessonSectionId()
    {
        return LessonSectionId::withString($this->payload['id']);
    }

    public function referenceId()
    {
        return LessonSectionReferenceId::withString($this->payload['reference_id']);
    }

    public function name()
    {
        return LessonSectionName::withString($this->payload['name']);
    }

    public function active()
    {
        return LessonSectionActive::withString($this->payload['active']);
    }
}