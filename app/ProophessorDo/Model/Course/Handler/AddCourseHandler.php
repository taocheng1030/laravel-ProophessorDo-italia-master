<?php


namespace App\ProophessorDo\Model\Course\Handler;


use App\ProophessorDo\Model\Course\Command\AddCourse;
use App\ProophessorDo\Model\Course\Course;
use App\ProophessorDo\Model\Course\CourseRepository;

class AddCourseHandler
{
    /**
     * @var CourseRepository
     */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }

    public function __invoke(AddCourse $command)
    {
        $course = Course::create(
            $command->courseId(),
            $command->referenceId(),
            $command->name()
        );
        $this->courseRepository->add($course);
    }
}