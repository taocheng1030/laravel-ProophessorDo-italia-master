<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Lesson\Event;

use App\ProophessorDo\Model\Lesson\LessonMultiLineTitle;
use App\ProophessorDo\Model\Lesson\LessonPage;
use App\ProophessorDo\Model\Lesson\LessonReferenceId;
use App\ProophessorDo\Model\Lesson\LessonSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Lesson\LessonCreatedBy;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonName;
use Prooph\ProophessorDo\Model\Lesson\LessonStatus;
use Prooph\ProophessorDo\Model\Lesson\LessonType;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\User\UserId;

class LessonWasCreated extends AggregateChanged
{

    /**
     * @var LessonId
     */
    protected $lessonId;

    /**
     * @var LessonReferenceId
     */
    protected $referenceId;

    /**
     * @var LessonSequence
     */
    protected $sequence;

    /**
     * @var LessonTypeId
     */
    protected $lessonTypeId;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var UnitId
     */
    protected $unitId;

    /**
     * @var LessonName
     */
    protected $name;

    /**
     * @var LessonMultiLineTitle
     */
    protected $multiLineTitle;

    /**
     * @var LessonDescription
     */
    protected $description;

    /**
     * @var LessonPage
     */
    protected $startingPage;

    /**
     * @var LessonPage
     */
    protected $endingPage;

    /**
     * @var LessonPage
     */
    protected $challengePage;

    /**
     * @var LessonPage
     */
    protected $practicePage;

    /**
     * @var LessonPage
     */
    protected $drillPage;

    /**
     * @var LessonCreatedBy
     */
    protected $createdBy;

    /**
     * @var LessonStatus
     */
    protected $status;

    public static function withData(
        LessonId $lessonId,
        LessonReferenceId $lessonReferenceId,
        LessonTypeId $lessonTypeId,
        LessonSequence $sequence,
        SubjectId $subjectId,
        UnitId $unitId,
        LessonName $name,
        LessonMultiLineTitle $multiLineTitle,
        LessonDescription $description,
        LessonPage $startingPage,
        LessonPage $endingPage,
        LessonPage $challengePage,
        LessonPage $practicePage,
        LessonPage $drillPage,
        UserId $createdBy,
        LessonStatus $status
    ) {
        $event = self::occur(
            $lessonId->toString(),
            [
                'lesson_type_id' => $lessonTypeId->toString(),
                'reference_id' => $lessonReferenceId->toString(),
                'sequence' => $sequence->toString(),
                'subject_id' => $subjectId->toString(),
                'unit_id' => $unitId->toString(),
                'name' => $name->toString(),
                'multi_line_title' => $multiLineTitle->toString(),
                'description' => $description->toString(),
                'starting_page' => $startingPage->toString(),
                'ending_page' => $endingPage->toString(),
                'challenge_page' => $challengePage->toString(),
                'practice_page' => $practicePage->toString(),
                'drill_page' => $drillPage->toString(),
                'created_by' => $createdBy->toString(),
                'status' => $status->toString(),
            ]
        );
        return $event;
    }

    public function lessonId()
    {
        if (!$this->lessonId) {
            $this->lessonId = LessonId::fromString($this->aggregateId());
        }
        return $this->lessonId;
    }

    public function referenceId()
    {
        if (!$this->referenceId) {
            $this->referenceId = LessonReferenceId::fromString($this->payload['reference_id']);
        }
        return $this->referenceId;
    }

    public function lessonTypeId()
    {
        if (!$this->lessonTypeId) {
            $this->lessonTypeId = LessonTypeId::fromString($this->payload['lesson_type_id']);
        }
        return $this->lessonTypeId;
    }

    public function sequence()
    {
        if (!$this->sequence) {
            $this->sequence = LessonSequence::fromString($this->payload['sequence']);
        }
        return $this->sequence;
    }

    public function subjectId()
    {
        if (!$this->subjectId) {
            $this->subjectId = SubjectId::fromString($this->payload['subject_id']);
        }
        return $this->subjectId;
    }

    public function unitId()
    {
        if (!$this->unitId) {
            $this->unitId = UnitId::fromString($this->payload['unit_id']);
        }
        return $this->unitId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name = LessonName::fromString($this->payload['name']);
        }
        return $this->name;
    }

    public function multiLineTitle()
    {
        if (!$this->multiLineTitle) {
            $this->multiLineTitle = LessonMultiLineTitle::fromString($this->payload['multi_line_title']);
        }
        return $this->multiLineTitle;
    }

    public function description()
    {
        if (!$this->description) {
            $this->description = LessonDescription::fromString($this->payload['description']);
        }
        return $this->description;
    }

    public function startingPage()
    {
        if (!$this->startingPage) {
            $this->startingPage = LessonPage::fromString($this->payload['starting_page']);
        }
        return $this->startingPage;
    }

    public function endingPage()
    {
        if (!$this->endingPage) {
            $this->endingPage = LessonPage::fromString($this->payload['ending_page']);
        }
        return $this->endingPage;
    }

    public function challengePage()
    {
        if (!$this->challengePage) {
            $this->challengePage = LessonPage::fromString($this->payload['challenge_page']);
        }
        return $this->challengePage;
    }

    public function practicePage()
    {
        if (!$this->practicePage) {
            $this->practicePage = LessonPage::fromString($this->payload['practice_page']);
        }
        return $this->practicePage;
    }

    public function drillPage()
    {
        if (!$this->drillPage) {
            $this->drillPage = LessonPage::fromString($this->payload['drill_page']);
        }
        return $this->drillPage;
    }

    public function createdBy()
    {
        if (!$this->createdBy) {
            $this->createdBy = LessonCreatedBy::fromString($this->payload['created_by']);
        }
        return $this->createdBy;
    }

    public function status()
    {
        if (!$this->status) {
            $this->status = LessonStatus::fromString($this->payload['status']);
        }
        return $this->status;
    }
}