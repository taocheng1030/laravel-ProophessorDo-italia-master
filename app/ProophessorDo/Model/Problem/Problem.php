<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem;

use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Video\VideoId;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemActivityWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemDifficultyWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemFormatWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemNoteWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemReferenceNumberWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemSubjectIdWasUpdate;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemTextUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasAdded;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasDeleted;
use Prooph\ProophessorDo\Model\Problem\Event\VideoWasAddedToProblem;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\Entity;
use Ramsey\Uuid\UuidInterface;

class Problem extends AggregateRoot implements Entity
{
    use AggregateRootTrait;

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var UuidInterface
     */
    protected $uuid;

    /**
     * @var ProblemText
     */
    protected $text;

    /**
     * @var ProblemDifficulty
     */
    protected $difficulty;

    /**
     * @var SectionId
     */
    protected $sectionId;

    /**
     * @var ProblemReferenceNumber
     */
    private $referenceNumber;

    /**
     * @var ProblemActive
     */
    private $active;

    /**
     * @var ProblemFormat
     */
    private $format;

    /**
     * @var ProblemNotes
     */
    private $note;

    /**
     * @var SubjectId
     */
    private $subjectId;

    /**
     * @var VideoId
     */
    private $videoId;

    public static function create(
        ProblemId $problemId,
        ProblemText $text,
        ProblemReferenceNumber $referenceNumber,
        SubjectId $subjectId,
        ProblemFormat $formatId,
        ProblemDifficulty $difficultyId,
        UserId $createdBy,
        ProblemCreatedOn $createdAt,
        SectionId $sectionId,
        Categories $categories,
        ProblemNotes $notes,
        Answers $answers,
        ProblemActive $problemActive
    ) {
        $self = new self();
        $self->recordThat(
            ProblemWasAdded::withData(
                $problemId,
                $text,
                $referenceNumber,
                $subjectId,
                $formatId,
                $difficultyId,
                $createdBy,
                $createdAt,
                $sectionId,
                $categories,
                $notes,
                $answers,
                $problemActive
            )
        );
        return $self;
    }

    public function updateReferenceNumber(ProblemId $problemId, ProblemReferenceNumber $referenceNumber)
    {
        $this->recordThat(
            ProblemReferenceNumberWasUpdated::withData(
                $problemId,
                $this->referenceNumber,
                $referenceNumber
            )
        );
    }

    public function updateActivity(ProblemActive $activity)
    {
        $this->recordThat(
            ProblemActivityWasUpdated::withData(
                $this->problemId,
                $this->active,
                $activity
            )
        );
    }

    public function updateDifficulty(ProblemDifficulty $difficulty)
    {
        $this->recordThat(
            ProblemDifficultyWasUpdated::withData(
                $this->problemId,
                $this->difficulty,
                $difficulty
            )
        );
    }

    public function updateFormat(ProblemFormat $format)
    {
        $this->recordThat(
            ProblemFormatWasUpdated::withData(
                $this->problemId,
                $this->format,
                $format
            )
        );

    }

    public function updateNote(ProblemNotes $note)
    {
        $this->recordThat(
            ProblemNoteWasUpdated::withData(
                $this->problemId,
                $this->note,
                $note
            )
        );
    }

    public function updateSubjectId(SubjectId $subjectId)
    {
        $this->recordThat(
            ProblemSubjectIdWasUpdate::withData(
                $this->problemId,
                $this->subjectId,
                $subjectId
            )
        );
    }

    public function updateText(ProblemText $text)
    {
        $this->recordThat(
            ProblemTextUpdated::withData(
                $this->problemId,
                $this->text,
                $text
            )
        );
    }

    public function addVideo($videoId)
    {
        $this->recordThat(
            VideoWasAddedToProblem::withData(
                $this->problemId,
                $videoId
            )
        );
    }

    public function delete()
    {
        $this->recordThat(
            ProblemWasDeleted::withData(
                $this->problemId
            )
        );
    }

    protected function aggregateId(): string
    {
        return $this->problemId->toString();
    }

    public function whenProblemWasAdded(ProblemWasAdded $event)
    {
        $this->problemId = $event->problemId();
        $this->text = $event->text();
        $this->referenceNumber = $event->referenceNumber();
        $this->subjectId = $event->subjectId();
        $this->sectionId = $event->sectionId();
        $this->format = $event->format();
        $this->difficulty = $event->difficulty();
        $this->createdBy = $event->createdBy();
        $this->note = $event->notes();
        $this->active = $event->active();
    }

    public function whenProblemReferenceNumberWasUpdated(ProblemReferenceNumberWasUpdated $event)
    {
        $this->referenceNumber = $event->referenceNumber();
    }

    public function whenProblemActivityWasUpdated(ProblemActivityWasUpdated $event)
    {
        $this->active = $event->active();
    }

    public function whenProblemDifficultyWasUpdated(ProblemDifficultyWasUpdated $event)
    {
        $this->problemId = $event->problemId();
        $this->active = $event->difficulty();
    }

    public function whenProblemFormatWasUpdated(ProblemFormatWasUpdated $event)
    {
        $this->problemId = $event->problemId();
        $this->format = $event->format();
    }

    public function whenProblemNoteWasUpdated(ProblemNoteWasUpdated $event)
    {
        $this->problemId = $event->problemId();
        $this->note = $event->note();
    }

    public function whenProblemSubjectIdWasUpdate(ProblemSubjectIdWasUpdate $event)
    {
        $this->problemId = $event->problemId();
        $this->subjectId = $event->subjectId();
    }

    public function whenProblemTextUpdated(ProblemTextUpdated $event)
    {
        $this->problemId = $event->problemId();
        $this->text = $event->text();
    }

    public function whenVideoWasAddedToProblem(VideoWasAddedToProblem $event)
    {
        $this->problemId = $event->problemId();
        $this->videoId = $event->videoId();
    }

    public function whenProblemWasDeleted(ProblemWasDeleted $event) {
    }

    public function apply(AggregateChanged $event): void
    {
        $handler = $this->determineEventHandlerMethodFor($event);
        if (! method_exists($this, $handler)) {
            throw new \RuntimeException(sprintf(
                'Missing event handler method %s for aggregate root %s',
                $handler,
                get_class($this)
            ));
        }
        $this->{$handler}($event);
    }

    protected function determineEventHandlerMethodFor(AggregateChanged $event)
    {
        return 'when' . implode(array_slice(explode('\\', get_class($event)), -1));
    }

    public function sameIdentityAs(Entity $other): bool
    {
        return get_class($this) === get_class($other) && $this->problemId->sameValueAs($other->problemId);
    }
}