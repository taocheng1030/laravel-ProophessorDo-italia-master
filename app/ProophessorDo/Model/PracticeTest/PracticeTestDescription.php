<?php


namespace App\ProophessorDo\Model\PracticeTest;


class PracticeTestDescription
{

    /**
     * @var string
     */
    private $description;

    public static function fromString(string $description)
    {
        return new self($description);
    }

    private function __construct(string $description)
    {
        $this->description = $description;
    }

    public function toString()
    {
        return $this->description;
    }
}