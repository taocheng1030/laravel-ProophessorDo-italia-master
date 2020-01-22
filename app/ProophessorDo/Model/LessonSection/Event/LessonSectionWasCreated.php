<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection\Event;

use App\EventSourcing\Model\LessonSection\LessonSectionActive;
use App\EventSourcing\Model\LessonSection\LessonSectionId;
use App\EventSourcing\Model\LessonSection\LessonSectionName;
use App\EventSourcing\Model\LessonSection\LessonSectionReferenceId;
use Prooph\EventSourcing\AggregateChanged;

class LessonSectionWasCreated extends AggregateChanged
{

    /**
     * @var LessonSectionId
     */
    private $lessonSectionId;

    /**
     * @var LessonSectionReferenceId
     */
    private $referenceId;

    /**
     * @var LessonSectionName
     */
    private $name;

    /**
     * @var LessonSectionActive
     */
    private $active;

    public static function withData(
        LessonSectionId $lessonSectionId,
        LessonSectionReferenceId $referenceId,
        LessonSectionName $name,
        LessonSectionActive $active
    ) {
       $event = self::occur(
           $lessonSectionId->toString(),
           [
               'reference_id' => $referenceId->toString(),
               'name' => $name->toString(),
               'active' => $active->toString()
           ]
       );
       return $event;
    }

    public function lessonSectionId()
    {
        if (!$this->lessonSectionId) {
            $this->lessonSectionId = LessonSectionId::withString($this->aggregateId());
        }
        return $this->lessonSectionId;
    }

    public function referenceId()
    {
        if (!$this->referenceId) {
            $this->referenceId = LessonSectionReferenceId::withString($this->payload['reference_id']);
        }
        return $this->referenceId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name = LessonSectionName::withString($this->payload['name']);
        }
        return $this->name;
    }

    public function active()
    {
        if (!$this->active) {
            $this->active = LessonSectionActive::withString($this->payload['active']);
        }
        return $this->active;
    }
}