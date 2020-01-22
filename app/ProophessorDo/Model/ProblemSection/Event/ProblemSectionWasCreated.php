<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection\Event;

use App\ProophessorDo\Model\ProblemSection\ProblemSectionAbbreviation;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionId;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionName;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class ProblemSectionWasCreated extends AggregateChanged
{

    /**
     * @var ProblemSectionId
     */
    protected $problemTypeId;

    /**
     * @var ProblemSectionName
     */
    protected $name;

    /**
     * @var ProblemSectionAbbreviation
     */
    protected $abbreviation;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    public static function withData(
        ProblemSectionId $problemTypeId,
        ProblemSectionName $name,
        ProblemSectionAbbreviation $abbreviation,
        SubjectId $subjectId
    ) {
        $event = self::occur(
            $problemTypeId->toString(),
            [
                'name' => $name->toString(),
                'abbreviation' => $abbreviation->toString(),
                'subject_id' => $subjectId->toString()
            ]
        );
        return $event;
    }

    public function problemTypeId()
    {
        if (!$this->problemTypeId) {
            $this->problemTypeId = ProblemSectionId::fromString($this->aggregateId());
        }
        return $this->problemTypeId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name = ProblemSectionName::fromString($this->payload['name']);
        }
        return $this->name;
    }

    public function abbreviation()
    {
        if (!$this->abbreviation) {
            $this->abbreviation = ProblemSectionAbbreviation::fromString($this->payload['abbreviation']);
        }
        return $this->abbreviation;
    }

    public function subjectId()
    {
        if (!$this->subjectId) {
            $this->subjectId = SubjectId::fromString($this->payload['subject_id']);
        }
        return $this->subjectId;
    }
}