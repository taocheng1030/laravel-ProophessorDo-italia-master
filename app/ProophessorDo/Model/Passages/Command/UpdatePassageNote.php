<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageNotes;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class UpdatePassageNote extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $passageId,
        string $note
    ) {
        return new self(
            [
                'passage_id' => $passageId,
                'note' => $note
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
    }

    public function note()
    {
        return PassageNotes::fromString($this->payload['note']);
    }
}