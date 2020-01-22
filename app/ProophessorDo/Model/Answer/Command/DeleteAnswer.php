<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Command;

use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerId;

class DeleteAnswer extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(string $answerId) {
        return new self(
            [
                'answer_id' => $answerId
            ]
        );
    }

    public function answerId()
    {
        return AnswerId::fromString($this->payload['answer_id']);
    }
}