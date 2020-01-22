<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson\Event;

use App\ProophessorDo\Model\Lesson\LessonReferenceId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Lesson\LessonId;

class LessonReferenceIdWasUpdated extends AggregateChanged
{
    /**
     * @var LessonId
     */
    protected $lessonId;

    /**
     * @var LessonReferenceId
     */
    protected $lessonReferenceId;

    /**
     * @param LessonId $lessonId
     * @param LessonReferenceId $oldLessonReferenceId
     * @param LessonReferenceId $lessonReferenceId
     * @return LessonReferenceIdWasUpdated
     */
    public static function withData(
        LessonId $lessonId,
        LessonReferenceId $oldLessonReferenceId,
        LessonReferenceId $lessonReferenceId
    ): AggregateChanged {
        $event = self::occur(
            $lessonId->toString(),
            [
                'old_lesson_reference_id' => $oldLessonReferenceId->toString(),
                'lesson_reference_id' => $lessonReferenceId->toString()
            ]
        );
        return $event;
    }

    public function lessonId()
    {
        if (!$this->lessonId) {
            $this->lessonId = LessonId::fromString($this->aggregateId());
        }
        return $this->lessonId;
    }

    public function lessonReferenceId()
    {
        if (!$this->lessonReferenceId) {
            $this->lessonReferenceId = LessonReferenceId::fromString($this->payload['lesson_reference_id']);
        }
        return $this->lessonReferenceId;
    }
}