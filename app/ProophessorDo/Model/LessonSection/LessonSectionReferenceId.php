<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

class LessonSectionReferenceId
{

    public static function withString($id)
    {
        return new self($id);
    }

    private function __construct($id)
    {
        $this->id = $id;
    }

    public function toString()
    {
        return $this->id;
    }
}