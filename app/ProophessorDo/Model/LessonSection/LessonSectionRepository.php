<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

interface LessonSectionRepository
{
    public function add(LessonSection $lessonSection);
    public function get(LessonSectionId $lessonSectionId): LessonSection;
}