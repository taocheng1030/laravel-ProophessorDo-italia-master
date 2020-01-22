<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages;

use App\ProophessorDo\Model\Passages\Event\PassageActivityUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageNotesUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageSubjectUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTestUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTextUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTitleUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageWasAdded;
use App\ProophessorDo\Model\Passages\Event\PassageWasDeleted;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Test\TestId;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class Passage extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var PassageId
     */
    protected $passageId;

    /**
     * @var PassageText
     */
    protected $text;

    /**
     * @var PassageTitle
     */
    protected $title;

    /**
     * @var TestId
     */
    protected $testId;

    /**
     * @var SectionId
     */
    protected $sectionId;

    /**
     * @var PassageSubjectId
     */
    protected $subjectId;

    /**
     * @var PassageActive
     */
    protected $passageActive;

    /**
     * @var PassageNotes
     */
    protected $passageNotes;

    /**
     * @var PassageReferenceId
     */
    protected $referenceId;

    public static function create(
        PassageId $passageId,
        PassageReferenceId $passageReferenceId,
        PassageText $passageText,
        PassageTitle $passageTitle,
        TestId $testId,
        PassageSubjectId $subjectId,
        PassageActive $passageActive,
        PassageNotes $notes
    ) {
        $self = new self();
        $self->recordThat(
            PassageWasAdded::withData(
                $passageId,
                $passageReferenceId,
                $passageText,
                $passageTitle,
                $testId,
                $subjectId,
                $passageActive,
                $notes
            )
        );
        return $self;
    }

    public function updateText(PassageText $text)
    {
        $this->recordThat(
            PassageTextUpdated::withData(
                $this->passageId,
                $this->text,
                $text
            )
        );
    }

    public function updateTitle($title)
    {
        $this->recordThat(
            PassageTitleUpdated::withData(
                $this->passageId,
                $this->title,
                $title
            )
        );
    }

    public function updateTest($testId)
    {
        $this->recordThat(
            PassageTestUpdated::withData(
                $this->passageId,
                $this->testId,
                $testId
            )
        );
    }

    public function updatePassageSubject($passageSubjectId)
    {
        $this->recordThat(
            PassageSubjectUpdated::withData(
                $this->passageId,
                $this->subjectId,
                $passageSubjectId
            )
        );
    }

    public function updatePassageActivity($activity)
    {
        $this->recordThat(
            PassageActivityUpdated::withData(
                $this->passageId,
                $this->passageActive,
                $activity
            )
        );
    }

    public function updateNote(PassageNotes $passageNotes)
    {
        $this->recordThat(
            PassageNotesUpdated::withData(
                $this->passageId,
                $this->passageNotes,
                $passageNotes
            )
        );
    }

    public function delete()
    {
        $this->recordThat(
            PassageWasDeleted::withData(
                $this->passageId
            )
        );
    }

    protected function aggregateId(): string
    {
        return $this->passageId->toString();
    }

    public function whenPassageWasAdded(PassageWasAdded $event)
    {
        $this->passageId = $event->passageId();
        $this->referenceId = $event->referenceId();
        $this->text = $event->passageText();
        $this->title = $event->passageTitle();
        $this->testId = $event->testId();
        $this->subjectId = $event->subjectId();
        $this->passageActive = $event->passageActive();
        $this->passageNotes = $event->passageNotes();
    }

    public function whenPassageTextUpdated(PassageTextUpdated $event)
    {
        $this->passageId = $event->passageId();
        $this->text = $event->text();
    }

    public function whenPassageTitleUpdated(PassageTitleUpdated $event)
    {
        $this->passageId = $event->passageId();
        $this->title = $event->title();
    }

    public function whenPassageSubjectUpdated(PassageSubjectUpdated $event)
    {
        $this->passageId = $event->passageId();
        $this->subjectId = $event->passageSubjectId();
    }

    public function whenPassageActivityUpdated(PassageActivityUpdated $event)
    {
        $this->passageId = $event->passageId();
        $this->passageActive = $event->active();
    }

    public function whenPassageWasDeleted(PassageWasDeleted $event)
    {

    }
}