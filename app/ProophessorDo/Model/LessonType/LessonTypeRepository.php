<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\LessonType;


interface LessonTypeRepository
{
    public function add(LessonType $lessonType);
    public function get(LessonTypeId $lessonTypeId);
}