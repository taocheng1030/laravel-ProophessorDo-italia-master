<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Lesson\Command;

use App\ProophessorDo\Model\Lesson\LessonMultiLineTitle;
use App\ProophessorDo\Model\Lesson\LessonPage;
use App\ProophessorDo\Model\Lesson\LessonReferenceId;
use App\ProophessorDo\Model\Lesson\LessonSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedBy;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedOn;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonEstimatedDuration;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonStatus;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Lesson\LessonUpdatedOn;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\User\UserId;

class CreateLesson extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $lessonId,
        string $referenceId,
        string $lessonTypeId,
        string $sequence,
        string $subjectId,
        string $unitId,
        string $title,
        string $multiLineTitle,
        string $description,
        string $startPage,
        string $endingPage,
        string $challengePage,
        string $practicePage,
        string $drillPage,
        string $createdBy,
        int $status
    ) : CreateLesson {
        return new self(
            [
                'lesson_id' => $lessonId,
                'reference_id' => $referenceId,
                'lesson_type_id' => $lessonTypeId,
                'sequence' => $sequence,
                'subject_id' => $subjectId,
                'unit_id' => $unitId,
                'title' => $title,
                'multi_line_title' => $multiLineTitle,
                'description' => $description,
                'starting_page' => $startPage,
                'ending_page' => $endingPage,
                'challenge_page' => $challengePage,
                'practice_page' => $practicePage,
                'drill_page' => $drillPage,
                'created_by' => $createdBy,
                'status' => $status,
            ]
        );
    }

    public function lessonId()
    {
        return LessonId::fromString($this->payload['lesson_id']);
    }

    public function referenceId()
    {
        return LessonReferenceId::fromString($this->payload['reference_id']);
    }

    public function lessonTypeId()
    {
        return LessonTypeId::fromString($this->payload['lesson_type_id']);
    }

    public function unitId()
    {
        return UnitId::fromString($this->payload['unit_id']);
    }

    public function status()
    {
        return LessonStatus::fromString($this->payload['status']);
    }

    public function name()
    {
        return LessonName::fromString($this->payload['title']);
    }

    public function description()
    {
        return LessonDescription::fromString($this->payload['description']);
    }


    public function createdBy()
    {
        return UserId::fromString($this->payload['created_by']);
    }

    public function sequence()
    {
        return LessonSequence::fromString($this->payload['sequence']);
    }

    public function subjectId()
    {
        return SubjectId::fromString($this->payload['subject_id']);
    }

    public function multiLineTitle()
    {
        return LessonMultiLineTitle::fromString($this->payload['multi_line_title']);
    }

    public function startingPage()
    {
        return LessonPage::fromString($this->payload['starting_page']);
    }

    public function endingPage()
    {
        return LessonPage::fromString($this->payload['starting_page']);
    }

    public function challengePage()
    {
        return LessonPage::fromString($this->payload['starting_page']);
    }

    public function practicePage()
    {
        return LessonPage::fromString($this->payload['starting_page']);
    }

    public function drillPage()
    {
        return LessonPage::fromString($this->payload['starting_page']);
    }


}