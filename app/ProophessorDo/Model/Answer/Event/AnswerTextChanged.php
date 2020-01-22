<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class AnswerTextChanged extends AggregateChanged
{

    /**
     * @var AnswerId
     */
    private $answerId;

    /**
     * @var AnswerContent
     */
    private $text;

    public static function withData(
        AnswerId $answerId, AnswerContent $oldText, AnswerContent $text)
    {
        $event = self::occur(
            $answerId->toString(),
            [
                'old_text' => $oldText,
                'text' => $text
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

    public function text()
    {
        if (!$this->text) {
            $this->text = AnswerContent::fromString($this->payload['text']);
        }
        return $this->text;
    }
}