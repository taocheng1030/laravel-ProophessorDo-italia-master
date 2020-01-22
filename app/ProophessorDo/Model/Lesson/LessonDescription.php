<?php


namespace Prooph\ProophessorDo\Model\Lesson;


class LessonDescription
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @param $description
     * @return LessonDescription
     */
    public static function fromString($description)
    {
        return new self($description);
    }

    private function __construct(string $description)
    {
        $this->description = $description;
    }

    public function toString()
    {
        return $this->description;
    }
}