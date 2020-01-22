<?php


namespace App\ProophessorDo\Model\Unit;


class UnitMultiLineLabel
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