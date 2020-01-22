<?php


namespace Prooph\ProophessorDo\Model\Unit;


use Assert\Assertion;

class UnitLabel
{

    /**
     * @var string
     */
    protected $name;

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