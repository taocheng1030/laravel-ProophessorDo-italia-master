<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;


class Skipped
{

    /**
     * @var int
     */
    private $skipped;

    public static function fromInt(int $skipped)
    {
        return new self($skipped);
    }

    private function __construct(int $skipped)
    {
        $this->skipped = $skipped;
    }

    public function toString()
    {
        return $this->skipped;
    }
}