<?php


namespace Prooph\ProophessorDo\Model\Lesson;


class LessonName
{

    /**
     * @var string
     */
    protected $name;

    public static function fromString($name)
    {
        return new self($name);
    }

    private function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }
}