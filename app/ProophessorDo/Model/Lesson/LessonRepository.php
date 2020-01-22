<?php


namespace Prooph\ProophessorDo\Model\Lesson;


interface LessonRepository
{
    public function add(Lesson $lesson);
    public function get(LessonId $lessonId): Lesson;
}