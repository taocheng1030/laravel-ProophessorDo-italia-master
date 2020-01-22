<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\Section\Command;

use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionName;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class CreateSection extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData($sectionId, $sectionName)
    {
        return new self(
            [
                'id' => $sectionId,
                'name' => $sectionName
            ]
        );
    }

    public function sectionId()
    {
        return SectionId::fromString($this->payload['id']);
    }

    public function name()
    {
        return SectionName::withString($this->payload['name']);
    }
}