<?php


namespace App\ProophessorDo\Model\LessonType;


class LessonTypeLabel
{

    private $label;

    public static function withString(string $label)
    {
        return new self($label);
    }

    private function __construct($label)
    {
        $this->label = $label;
    }

    public function toString()
    {
        return $this->label;
    }
}