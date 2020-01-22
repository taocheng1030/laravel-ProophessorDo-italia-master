<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\EventSourcing\Model\LessonSection\LessonSection;
use App\EventSourcing\Model\LessonSection\LessonSectionId;
use App\EventSourcing\Model\LessonSection\LessonSectionRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class LessonSectionCollection extends AggregateRepository implements LessonSectionRepository
{

    public function add(LessonSection $lessonSection)
    {
        $this->saveAggregateRoot($lessonSection);
    }

    public function get(LessonSectionId $lessonSectionId): LessonSection
    {
        return $this->getAggregateRoot($lessonSectionId->toString());
    }
}