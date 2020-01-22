<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\Course\Course;
use App\ProophessorDo\Model\Course\CourseId;
use App\ProophessorDo\Model\Course\CourseRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class CourseCollection extends AggregateRepository implements CourseRepository
{

    /**
     * @param Course $course
     */
    public function add(Course $course)
    {
        $this->saveAggregateRoot($course);
    }

    /**
     * @param CourseId $courseId
     * @return Course
     */
    public function get(CourseId $courseId): Course
    {
        return $this->getAggregateRoot($courseId->toString());
    }
}