<?php


namespace App\ProophessorDo\Model\LessonType;


class LessonTypeActive
{

    private $active;

    public static function withString($active)
    {
        return new self((bool) $active);
    }

    private function __construct($active)
    {
        $this->active = $active;
    }

    public function toString()
    {
        return $this->active;
    }
}