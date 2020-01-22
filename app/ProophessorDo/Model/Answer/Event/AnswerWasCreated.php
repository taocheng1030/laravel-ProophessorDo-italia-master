<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Event;

use App\ProophessorDo\Model\Answer\AnswerSequence;
use Illuminate\Support\Arr;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class AnswerWasCreated extends AggregateChanged
{
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
    private $choice;

    /**
     * @var ProblemId
     */
    private $problemId;

    public static function withData(
        AnswerId $answerId,
        AnswerContent $content,
        AnswerType $type,
        AnswerChoice $correctChoice,
        ProblemId $problemId,
        AnswerSequence $sequence
    ) {
        $event = self::occur(
            $answerId->toString(),
            [
                'content' => $content->toString(),
                'type' => $type->toString(),
                'correctChoice' => $correctChoice->toString(),
                'problemId' => $problemId->toString(),
                'sequence' => $sequence->toString()
            ]
        );
        return $event;
    }

    public function answerId()
    {
        if (!$this->answerId) {
            $this->answerId = AnswerId::fromString($this->aggregateId());
        }
        return $this->answerId;
    }

    public function content()
    {
        if (!$this->content) {
            $this->content = AnswerContent::fromString($this->payload['content']);
        }
        return $this->content;
    }

    public function type()
    {
        if (!$this->type) {
            $this->type = AnswerType::fromString($this->payload['type']);
        }
        return $this->type;
    }

    public function correctChoice()
    {
        if (!$this->choice) {
            $this->choice = AnswerChoice::fromString($this->payload['correctChoice']);
        }
        return $this->choice;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->payload['problemId']);
        }
        return $this->problemId;
    }

    public function sequence()
    {
        if (!$this->sequence) {
            $this->sequence = (Arr::get($this->payload, 'sequence')) ? AnswerSequence::fromString($this->payload['sequence']) : AnswerSequence::fromString(0);
        }
        return $this->sequence;
    }
}