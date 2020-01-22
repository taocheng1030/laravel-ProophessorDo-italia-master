<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem;

class ProblemActive
{
    private $active;

    public static function active(): ProblemActive
    {
        return new self(true);
    }

    public static function inactive(): ProblemActive
    {
        return new self(false);
    }

    /**
     * ProblemActive constructor.
     * @param Bool $active
     */
    private function __construct(Bool $active)
    {
        $this->active = $active;
    }

    public static function fromString($active)
    {
        return new self((bool)$active);
    }

    public function toString()
    {
        return $this->active;
    }
}