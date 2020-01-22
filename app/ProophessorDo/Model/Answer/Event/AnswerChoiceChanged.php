<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class AnswerChoiceChanged extends AggregateChanged
{

    /**
     * @var AnswerId
     */
    private $answerId;

    /**
     * @var AnswerChoice
     */
    private $choice;

    public static function withData(
        AnswerId $answerId,
        AnswerChoice $correctChoice,
        AnswerChoice $correct
    ) {
        $event = self::occur(
            $answerId->toString(),
            [
                'old_choice' => $correctChoice,
                'choice' => $correct
            ]
        );
        return $event;
    }

    public function answerId()
    {
        if(!$this->answerId) {
            $this->answerId = AnswerId::fromString($this->payload['answer_id']);
        }
        return $this->answerId;
    }

    public function choice()
    {
        if ($this->choice) {
            $this->choice = AnswerChoice::fromString($this->payload['choice']);
        }
        return $this->choice;
    }
}