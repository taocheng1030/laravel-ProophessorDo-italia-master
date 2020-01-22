<?php


namespace App\ProophessorDo\Model\ProblemFormat;


class ProblemFormatName
{

    /**
     * @var string
     */
    private $name;

    public static function fromString($name)
    {
        return new self($name);
    }

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }
}