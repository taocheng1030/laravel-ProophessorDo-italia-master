<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems;

class LessonProblemActive
{
    /**
     * @var bool
     */
    private $active;

    public static function fromString(string $active)
    {
        return new self((bool) $active);
    }

    private function __construct(bool $active)
    {
        return $this->active = $active;
    }

    public function toString()
    {
        return (string) $this->active;
    }
}