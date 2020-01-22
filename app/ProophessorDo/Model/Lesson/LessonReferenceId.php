<?php


namespace App\ProophessorDo\Model\Lesson;


class LessonReferenceId
{

    protected $referenceId;

    public static function fromString($referenceId)
    {
        return new self($referenceId);
    }

    private function __construct($referenceId)
    {
        $this->referenceId = $referenceId;
    }

    public function toString()
    {
        return $this->referenceId;
    }
}