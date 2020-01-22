<?php


namespace App\ProophessorDo\Model\PassageSubjects\Event;


use App\ProophessorDo\Model\PassageSubjects\PassageSubjectAbbreviation;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectActive;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use App\ProophessorDo\Model\PassageSubjects\PassageSubjectLabel;
use Prooph\EventSourcing\AggregateChanged;

class PassageSubjectWasAdded extends AggregateChanged
{

    /**
     * @var PassageSubjectLabel
     */
    protected $label;

    /**
     * @var PassageSubjectAbbreviation
     */
    protected $abbreviation;

    /**
     * @var PassageSubjectActive
     */
    protected $active;

    /**
     * @var PassageSubjectId
     */
    protected $passageSubjectId;

    public static function withData(
        PassageSubjectId $passageSubjectId,
        PassageSubjectLabel $label,
        PassageSubjectAbbreviation $abbreviation,
        PassageSubjectActive $active
    ) {
        $event = self::occur(
            $passageSubjectId->toString(),
            [
                'label' => $label->toString(),
                'abbreviation' => $abbreviation->toString(),
                'active' => $active->toString()
            ]
        );
        return $event;
    }

    public function passageSubjectId(): PassageSubjectId
    {
        if (!$this->passageSubjectId) {
            $this->passageSubjectId = PassageSubjectId::fromString($this->aggregateId());
        }
        return $this->passageSubjectId;
    }

    public function label(): PassageSubjectLabel
    {
        if(!$this->label) {
            $this->label = PassageSubjectLabel::withString($this->payload['label']);
        }
        return $this->label;
    }

    public function abbreviation(): PassageSubjectAbbreviation
    {
        if (!$this->abbreviation) {
            $this->abbreviation = PassageSubjectAbbreviation::withString($this->payload['abbreviation']);
        }
        return $this->abbreviation;
    }

    public function active(): PassageSubjectActive
    {
        if (!$this->active) {
            $this->active = PassageSubjectActive::fromString($this->payload['active']);
        }
        return $this->active;
    }
}