<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\LessonType\Event;


use App\ProophessorDo\Model\LessonType\LessonTypeActive;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use App\ProophessorDo\Model\LessonType\LessonTypeLabel;
use Prooph\EventSourcing\AggregateChanged;

class LessonTypeCreated extends AggregateChanged
{
    /**
     * @var LessonTypeId
     */
    protected $lessonTypeId;

    /**
     * @var LessonTypeLabel
     */
    protected $label;

    /**
     * @var LessonTypeActive
     */
    protected $active;

    /**
     * @param LessonTypeId $lessonId
     * @param LessonTypeLabel $label
     * @param LessonTypeActive $active
     * @return AggregateChanged
     */
    public static function withData(
        LessonTypeId $lessonId,
        LessonTypeLabel $label,
        LessonTypeActive $active
    ) {
        $event = self::occur(
            $lessonId->toString(),
            [
                'label' => $label->toString(),
                'active' => $active->toString()
            ]
        );

        return $event;
    }

    public function lessonTypeId()
    {
        if (!$this->lessonTypeId) {
            $this->lessonTypeId = LessonTypeId::fromString($this->aggregateId());
        }
        return $this->lessonTypeId;
    }

    public function label()
    {
        if (!$this->label) {
            $this->label = LessonTypeLabel::withString($this->payload['label']);
        }
        return $this->label;
    }

    public function active()
    {
        if (!$this->active) {
            $this->active = LessonTypeActive::withString($this->payload['active']);
        }
        return $this->active;
    }
}