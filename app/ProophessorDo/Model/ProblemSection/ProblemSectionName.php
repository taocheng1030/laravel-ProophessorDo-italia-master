<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemSection;

class ProblemSectionName
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