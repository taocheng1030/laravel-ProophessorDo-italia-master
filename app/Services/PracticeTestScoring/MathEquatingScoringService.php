<?php


namespace App\Services\PracticeTestScoring;


use App\Repositories\EquatingScoreTableRepository;

class MathEquatingScoringService
{
    /**
     * @var int
     */
    private $mathNoCalculator;
    /**
     * @var int
     */
    private $mathWithCalculator;
    /**
     * @var EquatingScoreTableRepository
     */
    private $equatingScoreTableRepository;

    public static function withScores(
        int $mathNoCalculator,
        int $mathWithCalculator,
        EquatingScoreTableRepository $equatingScoreTable
    ) {
        return new self($mathNoCalculator, $mathWithCalculator, $equatingScoreTable);
    }

    private function __construct(
        int $mathNoCalculator,
        int $mathWithCalculator,
        EquatingScoreTableRepository $equatingScoreTableRepository
    ) {

        $this->mathNoCalculator = $mathNoCalculator;
        $this->mathWithCalculator = $mathWithCalculator;
        $this->equatingScoreTableRepository = $equatingScoreTableRepository;
    }

    public function getEquatingScore() {
        return $this->equatingScoreTableRepository
            ->getMathSectionScore(
                $this->mathWithCalculator +
                $this->mathNoCalculator
            );
    }
}