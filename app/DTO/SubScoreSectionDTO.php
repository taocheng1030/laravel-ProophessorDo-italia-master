<?php


namespace App\DTO;


class SubScoreSectionDTO
{
    /**
     * @var int
     */
    private $subScoreSectionId;
    /**
     * @var int
     */
    private $rawScore;
    /**
     * @var null
     */
    private $score;
    /**
     * @var int
     */
    private $practiceTestId;

    public function __construct(
        int $practiceTestId,
        int $subScoreSectionId,
        int $rawScore,
        $score = null
    ) {

        $this->subScoreSectionId = $subScoreSectionId;
        $this->rawScore = $rawScore;
        $this->score = $score;
        $this->practiceTestId = $practiceTestId;
    }

    public function subScoreSectionId()
    {
        return $this->subScoreSectionId;
    }

    public function rawScore()
    {
        return $this->rawScore;
    }

    public function practiceTestId()
    {
        return $this->practiceTestId;
    }

    public function setScore(int $score)
    {
        $this->score = $score;
    }

    public function score()
    {
        return $this->score;
    }
}