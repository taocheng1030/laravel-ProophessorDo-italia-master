<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\Section\Event;

use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionName;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class SectionWasCreated extends AggregateChanged
{

    /**
     * @var SectionId
     */
    private $sectionId;

    /**
     * @var SectionName
     */
    private $name;

    /**
     * @var SectionId
     */
    private $subjectId;

    public static function withData(
        SectionId $sectionId,
        SectionName $name
    ) {
        $event = self::occur(
            $sectionId->toString(),
            [
                'name' => $name->toString()
            ]
        );
        return $event;
    }

    public function sectionId()
    {
        if (!$this->sectionId) {
            $this->sectionId = SectionId::fromString($this->aggregateId());
        }
        return $this->sectionId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name = SectionName::fromString($this->payload['name']);
        }
        return $this->name;
    }
}