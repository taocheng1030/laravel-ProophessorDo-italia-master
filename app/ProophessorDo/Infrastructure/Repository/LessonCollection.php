<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;


use Prooph\EventSourcing\Aggregate\AggregateRepository;
use Prooph\ProophessorDo\Model\Lesson\Lesson;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Model\Lesson\LessonRepository;

class LessonCollection extends AggregateRepository implements LessonRepository
{

    public function add(Lesson $lesson)
    {
        $this->saveAggregateRoot($lesson);
    }

    public function get(LessonId $lessonId): Lesson
    {
        return $this->getAggregateRoot($lessonId->toString());
    }
}