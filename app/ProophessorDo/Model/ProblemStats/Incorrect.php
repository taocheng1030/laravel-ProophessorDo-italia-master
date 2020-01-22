<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;


class Incorrect
{

    /**
     * @var int
     */
    private $incorrect;

    public static function fromInt(int $incorrect)
    {
        return new self($incorrect);
    }

    private function __construct(int $incorrect)
    {
        $this->incorrect = $incorrect;
    }

    public function toString()
    {
        return $this->incorrect;
    }
}