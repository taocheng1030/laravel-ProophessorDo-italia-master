<?php


namespace App\ProophessorDo\Model\ProblemFormat;


class ProblemFormatActive
{

    /**
     * @var boolean
     */
    private $active;

    public static function fromBoolean(bool $active)
    {
        return new self($active);
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