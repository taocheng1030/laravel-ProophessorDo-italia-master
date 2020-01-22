<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\PassageSubjects\Command;

use App\ProophessorDo\Model\PassageSubjects\PassageSubjectAbbreviation;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectActive;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectLabel;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class AddPassageSubject extends Command implements PayloadConstructable
{
    use PayloadTrait;

    /**
     * @param string $passageSubjectId
     * @param string $label
     * @param string $abbreviation
     * @param bool $active
     * @return AddPassageSubject
     */
    public static function withData(
        string $passageSubjectId,
        string $label,
        string $abbreviation,
        bool $active
    ) {
        return new self(
            [
                'id' => $passageSubjectId,
                'label' => $label,
                'abbreviation' => $abbreviation,
                'active' => $active
            ]
        );
    }

    /**
     * @return PassageSubjectId
     */
    public function passageSubjectId()
    {
        return PassageSubjectId::fromString($this->payload['id']);
    }

    /**
     * @return PassageSubjectLabel
     */
    public function label()
    {
        return PassageSubjectLabel::withString($this->payload['label']);
    }

    /**
     * @return PassageSubjectAbbreviation
     */
    public function abbreviation()
    {
        return PassageSubjectAbbreviation::withString($this->payload['abbreviation']);
    }

    /**
     * @return PassageSubjectActive
     */
    public function active()
    {
        return PassageSubjectActive::fromString($this->payload['active']);
    }
}