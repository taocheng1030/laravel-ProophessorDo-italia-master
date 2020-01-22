<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class MarkAnswerCorrect extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $answerId,
        bool $correct
    )
    {
        return new self(
            [
                'answer_id' => $answerId,
                'correct' => $correct
            ]
        );
    }

    public function answerId()
    {
        return AnswerId::fromString($this->payload['answer_id']);
    }

    public function correct()
    {
        return AnswerChoice::fromString($this->payload['correct']);
    }
}