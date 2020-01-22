<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Command;

use App\ProophessorDo\Model\Answer\AnswerSequence;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class ChangeAnswerSequence extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($answerId, $sequence)
    {
        return new self(
            [
                'answer_id' => $answerId,
                'sequence' => $sequence
            ]
        );
    }

    public function answerId()
    {
        return AnswerId::fromString($this->payload['answer_id']);
    }

    public function sequence()
    {
        return AnswerSequence::fromString($this->payload['sequence']);
    }
}