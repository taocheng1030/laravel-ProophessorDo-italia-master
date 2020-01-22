<?php


namespace Prooph\ProophessorDo\Model\Answer;


use App\ProophessorDo\Model\Answer\AnswerSequence;
use App\ProophessorDo\Model\Answer\Event\AnswerChoiceChanged;
use App\ProophessorDo\Model\Answer\Event\AnswerSequenceChanged;
use App\ProophessorDo\Model\Answer\Event\AnswerTextChanged;
use App\ProophessorDo\Model\Answer\Event\AnswerWasCreated;
use App\ProophessorDo\Model\Answer\Event\AnswerWasDeleted;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class Answer extends AggregateRoot
{
    use AggregateRootTrait;
    /**
     * @var AnswerSequence
     */
    protected $sequence;

    /**
     * @var AnswerId
     */
    private $answerId;

    /**
     * @var AnswerContent
     */
    private $content;

    /**
     * @var AnswerType
     */
    private $type;

    /**
     * @var AnswerChoice
     */
    private $correctChoice;

    /**
     * @var ProblemId
     */
    private $problemId;

    public static function create(
        AnswerId $answerId,
        AnswerContent $content,
        AnswerType $type,
        AnswerChoice $correctChoice,
        ProblemId $problemId,
        AnswerSequence $sequence
    ) {
        $self = new self();
        $self->recordThat(
            AnswerWasCreated::withData(
                $answerId,
                $content,
                $type,
                $correctChoice,
                $problemId,
                $sequence
            )
        );
        return $self;
    }

    public function delete()
    {
        $this->recordThat(
            AnswerWasDeleted::withData(
                $this->answerId
            )
        );
    }

    public function markChoice($correct)
    {
        $this->recordThat(
            AnswerChoiceChanged::withData(
                $this->answerId,
                $this->correctChoice,
                $correct
            )
        );
    }

    public function changeContent($text)
    {
        $this->recordThat(
            AnswerTextChanged::withData(
                $this->answerId,
                $this->content,
                $text
            )
        );
    }

    public function changeSequence(AnswerSequence $sequence)
    {
        $this->recordThat(
            AnswerSequenceChanged::withData(
                $this->answerId,
                $this->sequence,
                $sequence
            )
        );
    }

    protected function aggregateId(): string
    {
        return $this->answerId->toString();
    }

    public function whenAnswerWasCreated(AnswerWasCreated $event)
    {
        $this->answerId = $event->answerId();
        $this->content = $event->content();
        $this->type = $event->type();
        $this->correctChoice = $event->correctChoice();
        $this->problemId = $event->problemId();
        $this->sequence = $event->sequence();
    }

    public function whenAnswerTextChanged(AnswerTextChanged $event) {
        $this->content = $event->text();
    }

    public function whenAnswerSequenceChanged(AnswerSequenceChanged $event) {
        $this->sequence = $event->sequence();
    }
}