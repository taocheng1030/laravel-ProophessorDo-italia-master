<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;


use App\ProophessorDo\Model\Passages\PassageId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class DeletePassage extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $passageId
    ) {
        return new self(
            [
                'passage_id' => $passageId
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
    }
}