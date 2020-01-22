<?php


namespace Prooph\ProophessorDo\Model\Problem\Event;


use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemText;

class ProblemTextUpdated extends AggregateChanged
{

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var ProblemText
     */
    protected $text;

    public static function withData(
        ProblemId $problemId,
        ProblemText $oldText,
        ProblemText $newText
    ) {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldText' => $oldText->toString(),
                'newText' => $newText->toString()
            ]
        );
        $event->text = $newText;
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }

    public function text()
    {
        if (!$this->text) {
            $this->text = ProblemText::fromString($this->payload['newText']);
        }
        return $this->text;
    }
}