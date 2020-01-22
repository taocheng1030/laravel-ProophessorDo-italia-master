<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Command;

use App\ProophessorDo\Model\Passages\PassageId;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class UpdatePassageSubject extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        string $passageId,
        string $passageSubjectId
    ){
        return new self(
            [
                'passage_id' => $passageId,
                'passage_subject_id' => $passageSubjectId
            ]
        );
    }

    public function passageId()
    {
        return PassageId::fromString($this->payload['passage_id']);
    }

    public function passageSubjectId()
    {
        return PassageSubjectId::fromString($this->payload['passage_subject_id']);
    }
}