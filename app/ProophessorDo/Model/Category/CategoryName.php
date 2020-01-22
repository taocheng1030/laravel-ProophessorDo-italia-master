<?php


namespace Prooph\ProophessorDo\Model\Category;


class CategoryName
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