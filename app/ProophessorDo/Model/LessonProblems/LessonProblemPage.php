<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\LessonProblems;

use Prooph\EventStore\Util\Assertion;

class LessonProblemPage
{
    /**
     * @var Int
     */
    private $page;

    public static function fromString($page)
    {
        return new self((int) $page);
    }

    private function __construct(Int $page)
    {
        Assertion::min($page, 1);
        $this->page = $page;
    }

    public function toString()
    {
        return (string) $this->page;
    }
}