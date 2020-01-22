<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Video\VideoId;
use Prooph\ProophessorDo\Model\Answer\Answers;
use Prooph\ProophessorDo\Model\Category\Categories;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemCreatedOn;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemText;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\User\UserId;
use Prooph\EventSourcing\AggregateChanged;

class ProblemWasAdded extends AggregateChanged
{
    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var ProblemCreatedOn
     */
    protected $createdOn;

    /**
     * @var ProblemText
     */
    protected $text;

    /**
     * @var ProblemReferenceNumber
     */
    protected $referenceNumber;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var ProblemFormat
     */
    protected $format;
    /**
     * @var VideoId
     */
    protected $videoId;

    /**
     * @var ProblemDifficulty
     */
    private $difficulty;

    /**
     * @var UserId
     */
    private $createdBy;

    /**
     * @var SectionId
     */
    private $sectionId;

    /**
     * @var Categories
     */
    private $categories;

    /**
     * @var ProblemNotes
     */
    private $notes;

    /**
     * @var Answers
     */
    private $answers;

    /**
     * @var ProblemActive
     */
    private $active;

    public static function withData(
        ProblemId $problemId,
        ProblemText $text,
        ProblemReferenceNumber $referenceNumber,
        SubjectId $subjectId,
        ProblemFormat $format,
        ProblemDifficulty $difficulty,
        UserId $userId,
        ProblemCreatedOn $createdAt,
        SectionId $sectionId,
        Categories $categories,
        ProblemNotes $notes,
        Answers $answers,
        ProblemActive $problemActive
    ) {
        /**
         * @var ProblemWasAdded $event
         */
        $event = self::occur(
            $problemId->toString(),
            [
                'text' => $text->toString(),
                'reference_number' => $referenceNumber->toString(),
                'subject_id' => $subjectId->toString(),
                'format' => $format->toString(),
                'difficulty' => $difficulty->toString(),
                'created_at' => $createdAt->toString(),
                'created_by' => $userId->toString(),
                'section_id' => $sectionId->toString(),
                'categories' => $categories->toString(),
                'notes' => $notes->toString(),
                'answers' => $answers->toString(),
                'active' => $problemActive->toString()
            ]
        );
        $event->problemId = $problemId;
        $event->text = $text;
        $event->referenceNumber = $referenceNumber;
        $event->subjectId = $subjectId;
        $event->format = $format;
        $event->difficulty = $difficulty;
        $event->sectionId = $sectionId;
        $event->notes = $notes;
        $event->active = $problemActive;
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }

    public function createdOn()
    {
        if (!$this->createdOn) {
            $this->createdOn = ProblemCreatedOn::fromString($this->payload['created_at']);
        }
        return $this->createdOn;
    }

    public function text()
    {
        if (!$this->text) {
            $this->text = ProblemText::fromString($this->payload['text']);
        }
        return $this->text;
    }

    public function referenceNumber(): ProblemReferenceNumber
    {
        if (!$this->referenceNumber) {
            $this->referenceNumber = ProblemReferenceNumber::fromString($this->payload['reference_number']);
        }
        return $this->referenceNumber;

    }

    public function subjectId(): SubjectId
    {
        if (!$this->subjectId) {
            $this->subjectId = SubjectId::fromString($this->payload['subject_id']);
        }
        return $this->subjectId;
    }

    public function format()
    {
        if (!$this->format) {
            $this->format = ProblemFormat::fromString($this->payload['format']);
        }
        return $this->format;
    }

    public function difficulty()
    {
        if (!$this->difficulty) {
            $this->difficulty = ProblemDifficulty::fromInt($this->payload['difficulty']);
        }
        return $this->difficulty;
    }

    public function createdBy()
    {
        if (!$this->createdBy) {
            $this->createdBy = UserId::fromString($this->payload['created_by']);
        }
        return $this->createdBy;
    }

    public function sectionId()
    {
        if (!$this->sectionId) {
            $this->sectionId = SectionId::fromString($this->payload['section_id']);
        }
        return $this->sectionId;
    }

    public function categories()
    {
        if (!$this->categories) {
            $this->categories = Categories::fromArray(json_decode($this->payload['categories']));
        }
        return $this->categories;
    }

    public function notes()
    {
        if (!$this->notes) {
            $this->notes = ProblemNotes::fromString($this->payload['notes']);
        }
        return $this->notes;
    }

    public function answers()
    {
        if (!$this->answers) {
            $this->answers = Answers::fromArray(json_decode($this->payload['answers']));
        }
        return $this->answers;
    }

    public function active()
    {
        if (!$this->active) {
            $this->active = ProblemActive::fromString($this->payload['active']);
        }
        return $this->active;
    }

}