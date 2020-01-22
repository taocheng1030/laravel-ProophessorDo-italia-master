<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\EventSourcing\Model\LessonProblems\LessonProblem;
use App\EventSourcing\Model\LessonProblems\LessonProblemId;
use App\EventSourcing\Model\LessonProblems\LessonProblemRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class LessonProblemCollection extends AggregateRepository implements LessonProblemRepository
{

    public function add(LessonProblem $lessonProblem)
    {
        $this->saveAggregateRoot($lessonProblem);
    }

    public function get(LessonProblemId $lessonProblemId): LessonProblem
    {
        return $this->getAggregateRoot($lessonProblemId->toString());
    }
}