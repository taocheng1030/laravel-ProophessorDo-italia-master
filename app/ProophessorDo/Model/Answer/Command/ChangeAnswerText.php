<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class ChangeAnswerText extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(string $answerId, string $text)
    {
        return new self(
            [
                'answer_id' => $answerId,
                'text' => $text
            ]
        );
    }

    public function answerId()
    {
        return AnswerId::fromString($this->payload['answer_id']);
    }

    public function text()
    {
        return AnswerContent::fromString($this->payload['text']);
    }
}