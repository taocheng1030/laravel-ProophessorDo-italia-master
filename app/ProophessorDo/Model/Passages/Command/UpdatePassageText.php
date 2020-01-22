<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageText;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class UpdatePassageText extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(string $passageId, string $passageText)
    {
        return new self(
            [
                'passage_id' => $passageId,
                'text' => $passageText
            ]
        );
    }

    public function passageId(): PassageId
    {
        return PassageId::fromString($this->payload['passage_id']);
    }

    public function text(): PassageText
    {
        return PassageText::fromString($this->payload['text']);
    }
}