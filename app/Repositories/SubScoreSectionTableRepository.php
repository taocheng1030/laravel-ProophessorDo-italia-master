<?php


namespace App\Repositories;


use App\SubScoringTable;

class SubScoreSectionTableRepository
{
    /**
     * @var int
     */
    protected $subScoreSectionId;

    /**
     * @var int
     */
    protected $rawScore;

    /**
     * @var int
     */
    protected $practiceTestId;


    /**
     * @param int $subScoreSectionId
     * @return SubScoreSectionTableRepository
     */
    public function withSubScoreSection(int $subScoreSectionId)
    {
        $this->subScoreSectionId = $subScoreSectionId;
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

    /**
     * @return int
     */
    public function get()
    {
        $subSectionScore = SubScoringTable::select('section_score')->where('sub_score_section_id', $this->subScoreSectionId)
            ->where('raw_score', $this->rawScore)
            ->where('practice_test_id', $this->practiceTestId)
            ->first()->section_score;

        $this->rawScore = null;
        $this->subScoreSectionId = null;
        return $subSectionScore;
    }

    public function forPracticeTest(int $practiceTestId)
    {
        $this->practiceTestId = $practiceTestId;
        return $this;
    }
}