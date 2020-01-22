<?php


namespace App\ProophessorDo\Model\PracticeTest;


class PracticeTestName
{

    /**
     * @var string
     */
    private $name;

    public static function fromString(string $name)
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