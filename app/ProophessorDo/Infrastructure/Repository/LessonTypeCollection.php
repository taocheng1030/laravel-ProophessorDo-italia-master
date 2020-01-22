<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\LessonType\LessonType;
use App\ProophessorDo\Model\LessonType\LessonTypeId;
use App\ProophessorDo\Model\LessonType\LessonTypeRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class LessonTypeCollection extends AggregateRepository implements LessonTypeRepository
{
    public function add(LessonType $lessonType)
    {
        $this->saveAggregateRoot($lessonType);
    }

    /**
     * @param LessonTypeId $lessonTypeId
     * @return LessonType
     */
    public function get(LessonTypeId $lessonTypeId): LessonType
    {
        return $this->getAggregateRoot($lessonTypeId->toString());
    }
}