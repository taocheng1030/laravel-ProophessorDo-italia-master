<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem;

use Webmozart\Assert\Assert;

class ProblemDifficulty
{

    /**
     * @var string
     */
    protected $difficulty;

    private function __construct(int $difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * @param int $difficulty
     * @return ProblemDifficulty
     */
    public static function fromInt(int $difficulty)
    {
        return new self($difficulty);
    }

    public function toString()
    {
        return $this->difficulty;
    }
}