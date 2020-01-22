<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Command;

use App\ProophessorDo\Model\Answer\AnswerSequence;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class CreateAnswer extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        $answerId,
        $content,
        $type,
        $correctChoice,
        $problemId,
        $sequence
    ) {
        return new self(
            [
                'answerId' => $answerId,
                'content' => $content,
                'type' => $type,
                'correctChoice' => $correctChoice,
                'problemId' => $problemId,
                'sequence' => $sequence
            ]
        );
    }

    public function answerId()
    {
        return AnswerId::fromString($this->payload['answerId']);
    }

    public function content()
    {
        return AnswerContent::fromString($this->payload['content']);
    }

    public function type()
    {
        return AnswerType::fromString($this->payload['type']);
    }

    public function correctChoice()
    {
        return AnswerChoice::fromString($this->payload['correctChoice']);
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problemId']);
    }

    public function sequence()
    {
        return AnswerSequence::fromString($this->payload['sequence']);
    }
}