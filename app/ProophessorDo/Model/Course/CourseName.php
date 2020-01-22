<?php


namespace App\ProophessorDo\Model\Course;


use Webmozart\Assert\Assert;

class CourseName
{

    /**
     * @var string
     */
    protected $name;

    public static function fromString($name)
    {
        Assert::notNull($name);
        return new self($name);
    }

    private function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $this->name;
    }
}