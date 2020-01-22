<?php


namespace App\ProophessorDo\Model\PassageSubjects;


use Assert\Assertion;

class PassageSubjectAbbreviation
{

    private $abbreviation;

    public static function withString($abbreviation)
    {
        return new self($abbreviation);
    }

    private function __construct($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    }

    public function toString()
    {
        return $this->abbreviation;
    }
}