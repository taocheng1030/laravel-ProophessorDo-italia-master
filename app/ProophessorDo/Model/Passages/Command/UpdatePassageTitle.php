<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\Passages\PassageTitle;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class UpdatePassageTitle extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        string $passageId,
        string $passageTitle
    ) {
        return new self(
            [
                'passage_id' => $passageId,
                'title' => $passageTitle
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
    }

    public function title()
    {
        return PassageTitle::fromString($this->payload['title']);
    }
}