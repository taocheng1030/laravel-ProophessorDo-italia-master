<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

class LessonSectionActive
{
    private $active;

    public static function withString($active)
    {
        return new self((bool) $active);
    }

    private function __construct(bool $active)
    {
        $this->active = $active;
    }

    public function toString()
    {
        return $this->active;
    }
}