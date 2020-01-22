<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection;

class ProblemSectionAbbreviation
{

    /**
     * @var string
     */
    private $abbreviation;

    public static function fromString($abbreviation)
    {
        return new self($abbreviation);
    }

    private function __construct(string $abbreviation)
    {
        $this->abbreviation = $abbreviation;
    }

    public function toString()
    {
        return $this->abbreviation;
    }
}