<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonSection;

class LessonSectionName
{

    /**
     * @var string
     */
    private $label;

    public static function withString($label)
    {
        return new self($label);
    }

    private function __construct(string $label)
    {
        $this->label = $label;
    }

    public function toString()
    {
        return $this->label;
    }
}