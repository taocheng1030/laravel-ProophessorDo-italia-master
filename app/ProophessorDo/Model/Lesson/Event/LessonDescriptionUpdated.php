<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson\Event;


use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Lesson\LessonDescription;
use Prooph\ProophessorDo\Model\Lesson\LessonId;

class LessonDescriptionUpdated extends AggregateChanged
{
    /**
     * @var LessonId
     */
    protected $lessonId;

    /**
     * @var LessonDescription
     */
    protected $description;

    public static function withData(
        LessonId $lessonId,
        LessonDescription $oldDescription,
        LessonDescription $description
    ) {
        return new self(
            $lessonId->toString(),
            [
                'description' => $description,
                'old_description' => $oldDescription
            ]
        );
    }

    public function lessonId()
    {
        if (!$this->lessonId) {
            $this->lessonId = LessonId::fromString($this->aggregateId());
        }
        return $this->lessonId;
    }

    public function description()
    {
        if (!$this->description) {
            $this->description = LessonDescription::fromString($this->payload['description']);
        }
        return $this->description;
    }
}