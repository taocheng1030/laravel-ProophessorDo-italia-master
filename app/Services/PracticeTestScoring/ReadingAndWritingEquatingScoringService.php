<?php


namespace App\Services\PracticeTestScoring;


use App\Repositories\EquatingScoreTableRepository;

class ReadingAndWritingEquatingScoringService
{
    /**
     * @var int
     */
    private $reading;
    /**
     * @var int
     */
    private $writing;
    /**
     * @var EquatingScoreTableRepository
     */
    private $scoringTable;

    public static function withScores(
        int $reading,
        int $writing,
        EquatingScoreTableRepository $scoringTable
    ) {
        return new self($reading, $writing, $scoringTable);
    }

    private function __construct(
        int $reading,
        int $writing,
        EquatingScoreTableRepository $scoringTable
    ) {
        $this->reading = $reading;
        $this->writing = $writing;
        $this->scoringTable = $scoringTable;
    }

    public function getEquatingScore() {
        return $this->scoringTable->readingSectionScore($this->reading) +
            $this->scoringTable->writingScore($this->writing);
    }
}