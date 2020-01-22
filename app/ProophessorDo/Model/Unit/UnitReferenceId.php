<?php


namespace App\ProophessorDo\Model\Unit;


class UnitReferenceId
{

    /**
     * @var string
     */
    protected $referenceId;

    public static function fromString(string $string)
    {
        return new self($string);
    }

    private function __construct(string $referenceId)
    {
        $this->referenceId = $referenceId;
    }

    public function toString()
    {
        return $this->referenceId;
    }
}