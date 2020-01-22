<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems;

interface LessonProblemRepository
{
    public function add(LessonProblem $lessonProblem);
    public function get(LessonProblemId $lessonProblemId): LessonProblem;
}