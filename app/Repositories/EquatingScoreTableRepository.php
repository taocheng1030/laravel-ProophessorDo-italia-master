<?php
declare(strict_types=1);

namespace App\Repositories;

use App\ScoringTable;

class EquatingScoreTableRepository
{
    const READING = 1;
    const WRITING_AND_LANGUAGE = 2;
    const MATH = 3;

    private $practiceTestId;

    public static function withTest($practiceTestId)
    {
        return new self($practiceTestId);
    }

    private function __construct(int $practiceTestId)
    {
        $this->practiceTestId = $practiceTestId;
    }

    public function readingSectionScore(int $rawReadingScore)
    {
        return ScoringTable::where('subject_id', self::READING)
            ->where('raw_score', $rawReadingScore)
            ->where('practice_test_id', $this->practiceTestId)
            ->first()->equating_score;
    }

    public function writingScore(int $rawWritingScore)
    {
        return ScoringTable::where('subject_id', self::WRITING_AND_LANGUAGE)
            ->where('raw_score', $rawWritingScore)
            ->where('practice_test_id', $this->practiceTestId)
            ->first()->equating_score;
    }

    public function getMathSectionScore(int $rawMathScore)
    {
        $score = ScoringTable::select('equating_score')
            ->where('subject_id', self::MATH)
            ->where('raw_score', $rawMathScore)
            ->where('practice_test_id', $this->practiceTestId)
            ->first();


        return $score->equating_score;
    }
}