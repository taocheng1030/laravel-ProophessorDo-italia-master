<?php


namespace App\DTO;


class CrossTestScoresDTO
{

    /**
     * @var int
     */
    protected $score;

    /**
     * @var int
     */
    protected $practiceTestId;

    /**
     * @var int
     */
    protected $crossSectionId;

    /**
     * @var int
     */
    protected $rawScore;

    public function __construct(
        int $practiceTestId,
        int $crossSectionId,
        int $rawScore,
        int $score = null
    ) {
        $this->practiceTestId = $practiceTestId;
        $this->crossSectionId = $crossSectionId;
        $this->rawScore = $rawScore;
        $this->score = $score;
    }

    public function setScore(int $score)
    {
        $this->score = $score;
    }

    public function practiceTestId()
    {
        return $this->practiceTestId;
    }

    public function crossSectionId()
    {
        return $this->crossSectionId;
    }

    public function rawScore()
    {
        return $this->rawScore;
    }

    public function score()
    {
        return $this->score;
    }
}