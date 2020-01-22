<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class AnswerWasDeleted extends AggregateChanged
{
    /**
     * @var AnswerId
     */
    private $answerId;

    public static function withData(AnswerId $answerId)
    {
        $event = self::occur(
            $answerId->toString(),
            []
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
}