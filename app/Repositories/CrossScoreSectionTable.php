<?php
declare(strict_types=1);

namespace App\Repositories;

use App\CrossTestScoringTable;

class CrossScoreSectionTable
{

    /**
     * @var int $practiceTestId
     */
    protected $practiceTestId;

    /**
     * @var int $crossSectionId
     */
    protected $crossSectionId;

    /**
     * @var int $rawScore
     */
    protected $rawScore;

    /**
     * @param $practiceTestId
     * @return $this
     */
    public function forPracticeTest($practiceTestId)
    {
        $this->practiceTestId = $practiceTestId;
        return $this;
    }

    /**
     * @param $crossSectionId
     * @return $this
     */
    public function withCrossTestSection($crossSectionId)
    {
        $this->crossSectionId = $crossSectionId;
        return $this;
    }

    /**
     * @param $rawScore
     * @return $this
     */
    public function withRawScore($rawScore)
    {
        $this->rawScore = $rawScore;
        return $this;
    }

    public function get()
    {
        $crossTestScore = CrossTestScoringTable::select('score')
            ->where('sat_practice_test_id', $this->practiceTestId)
            ->where('cross_test_section_id', $this->crossSectionId)
            ->where('raw_score', $this->rawScore)
            ->first();

        $this->practiceTestId = null;
        $this->crossSectionId = null;
        $this->rawScore = null;
        return $crossTestScore->score;
    }
}