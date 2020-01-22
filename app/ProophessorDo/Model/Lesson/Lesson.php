<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Lesson;

use App\ProophessorDo\Model\Lesson\Event\LessonDescriptionUpdated;
use App\ProophessorDo\Model\Lesson\Event\LessonReferenceIdWasUpdated;
use App\ProophessorDo\Model\Lesson\LessonMultiLineTitle;
use App\ProophessorDo\Model\Lesson\LessonPage;
use App\ProophessorDo\Model\Lesson\LessonReferenceId;
use App\ProophessorDo\Model\Lesson\LessonSequence;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Lesson\Event\LessonWasCreated;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\User\UserId;

class Lesson extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var LessonId
     */
    protected $lessonId;


    /**
     * @var LessonReferenceId
     */
    protected $lessonReferenceId;

    /**
     * @var LessonTypeId
     */
    protected $lessonTypeId;

    /**
     * @var UnitId
     */
    protected $unitId;

    /**
     * @var LessonStatus
     */
    protected $status;

    /**
     * @var LessonName
     */
    protected $name;

    /**
     * @var LessonDescription
     */
    protected $description;


    /**
     * @var LessonCreatedBy
     */
    protected $createdBy;

    /**
     * @var LessonSequence
     */
    protected $sequence;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var LessonMultiLineTitle
     */
    protected $multiLineTitle;

    /**
     * @var LessonPage
     */
    protected $startPage;

    /**
     * @var LessonPage
     */
    protected $endPage;

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
     * @param LessonId $lessonId
     * @param LessonReferenceId $referenceId
     * @param LessonTypeId $lessonTypeId
     * @param LessonSequence $sequence
     * @param SubjectId $subjectId
     * @param UnitId $unitId
     * @param LessonName $name
     * @param LessonMultiLineTitle $multiLineTitle
     * @param LessonDescription $description
     * @param LessonPage $startingPage
     * @param LessonPage $endingPage
     * @param LessonPage $challengePage
     * @param LessonPage $practicePage
     * @param LessonPage $drillPage
     * @param UserId $createdBy
     * @param LessonStatus $status
     * @return Lesson
     */
    public static function create(
        LessonId $lessonId,
        LessonReferenceId $referenceId,
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
        $self = new self();
        $self->recordThat(
            LessonWasCreated::withData(
                $lessonId,
                $referenceId,
                $lessonTypeId,
                $sequence,
                $subjectId,
                $unitId,
                $name,
                $multiLineTitle,
                $description,
                $startingPage,
                $endingPage,
                $challengePage,
                $practicePage,
                $drillPage,
                $createdBy,
                $status
            )
        );
        return $self;
    }

    public function updateDescription(LessonDescription $description)
    {
        $this->recordThat(
            LessonDescriptionUpdated::withData(
                $this->lessonId,
                $this->description,
                $description
            )
        );
    }

    public function updateReferenceId(LessonReferenceId $lessonReferenceId)
    {
        $this->recordThat(
            LessonReferenceIdWasUpdated::withData(
                $this->lessonId,
                $this->lessonReferenceId,
                $lessonReferenceId
            )
        );
    }

    protected function aggregateId(): string
    {
        return $this->lessonId->toString();
    }

    public function whenLessonWasCreated(LessonWasCreated $event)
    {
        $this->lessonId = $event->lessonId();
        $this->lessonReferenceId = $event->referenceId();
        $this->lessonTypeId = $event->lessonTypeId();
        $this->sequence = $event->sequence();
        $this->subjectId = $event->subjectId();
        $this->unitId  = $event->unitId();
        $this->status = $event->status();
        $this->name = $event->name();
        $this->multiLineTitle = $event->multiLineTitle();
        $this->description = $event->description();
        $this->startPage = $event->startingPage();
        $this->endPage = $event->endingPage();
        $this->challengePage = $event->challengePage();
        $this->practicePage = $event->practicePage();
        $this->drillPage = $event->drillPage();
        $this->createdBy = $event->createdBy();
    }

    public function whenLessonDescriptionUpdated(LessonDescriptionUpdated $event)
    {
        $this->description = $event->description();
    }

    public function whenLessonReferenceIdWasUpdated(LessonReferenceIdWasUpdated $event)
    {
        $this->lessonReferenceId = $event->lessonReferenceId();
    }
}