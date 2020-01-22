<?php


namespace App\ProophessorDo\Model\Lesson;


class LessonPage
{

    private $startingPage;

    public static function fromString($startingPage)
    {
        return new self($startingPage);
    }

    private function __construct($startingPage)
    {
        $this->startingPage = $startingPage;
    }

    public function toString()
    {
        return $this->startingPage;
    }
}