<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats;


class Pending
{

    /**
     * @var int
     */
    private $pending;

    public static function fromInt(int $pending)
    {
        return new self($pending);
    }

    private function __construct(int $pending)
    {
        $this->pending = $pending;
    }

    public function toString()
    {
        return $this->pending;
    }
}