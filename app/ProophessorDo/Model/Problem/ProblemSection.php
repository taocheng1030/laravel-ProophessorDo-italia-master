<?php


namespace Prooph\ProophessorDo\Model\Problem;


class ProblemSection
{

    /**
     * @var string
     */
    protected $section;

    public static function fromString(string $section)
    {
        return new self($section);
    }

    private function __construct(string $section)
    {
        $this->section = $section;
    }

    public function toString()
    {
        return $this->section;
    }
}