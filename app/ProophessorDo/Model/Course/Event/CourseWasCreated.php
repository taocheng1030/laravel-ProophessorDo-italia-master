<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Course\Event;

use App\ProophessorDo\Model\Course\CourseId;
use App\ProophessorDo\Model\Course\CourseName;
use App\ProophessorDo\Model\Course\CourseRefId;
use Prooph\EventSourcing\AggregateChanged;

class CourseWasCreated extends AggregateChanged
{

    /**
     * @var CourseId
     */
    protected $courseId;

    /**
     * @var CourseRefId
     */
    protected $referenceId;

    /**
     * @var CourseName
     */
    protected $name;

    public static function withData(
        CourseId $courseId,
        CourseRefId $referenceId,
        CourseName $name
    ) {
        /**
         * @var CourseWasCreated $event
         */
        $event = self::occur(
            $courseId->toString(),
            [
                'reference_id' => $referenceId->toString(),
                'name' => $name->toString()
            ]
        );
        $event->courseId = $courseId;
        $event->referenceId = $referenceId;
        $event->name = $name;
        return $event;
    }

    public function courseId()
    {
        if(!$this->courseId) {
            $this->courseId = CourseId::fromString($this->aggregateId());
        }
        return $this->courseId;
    }

    public function referenceId()
    {
        if(!$this->referenceId) {
            $this->referenceId = CourseRefId::fromString($this->payload['reference_id']);
        }
        return $this->referenceId;
    }

    public function name()
    {
        if(!$this->name) {
            $this->name = CourseName::fromString($this->payload['name']);
        }
        return $this->name;
    }
}