<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Lesson;


class LessonMultiLineTitle
{

    private $multiLineTitle;

    public static function fromString($multiLineTitle)
    {
        return new self($multiLineTitle);
    }

    private function __construct($multiLineTitle)
    {
        $this->multiLineTitle = $multiLineTitle;
    }

    public function toString()
    {
        return $this->multiLineTitle;
    }
}