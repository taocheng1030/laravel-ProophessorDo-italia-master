<?php


namespace App\ProophessorDo\Model\Course;


interface CourseRepository
{
    public function add(Course $course);
    public function get(CourseId $courseId): Course;
}