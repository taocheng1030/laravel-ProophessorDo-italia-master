<?php


namespace App\Services\PracticeTestScoring;


use App\DTO\CrossTestScoresDTO;
use App\Repositories\CrossScoreSectionTable;
use Illuminate\Support\Collection;

class CrossTestScoresService
{
    protected $crossSectionId;
    /**
     * @var CrossScoreSectionTable
     */
    private $repository;

    public function __construct(
        CrossScoreSectionTable $repository
    )
    {
        $this->repository = $repository;
    }

    /**
     * @param Collection $crossTestScores
     * @return Collection
     */
    public function getCrossTestScores(Collection $crossTestScores): Collection
    {
        return $crossTestScores->map(function(CrossTestScoresDTO $crossTestScore) {
            $crossTestScore->setScore(
                $this->repository
                    ->forPracticeTest(
                        $crossTestScore->practiceTestId()
                    )
                    ->withCrossTestSection(
                        $crossTestScore->crossSectionId()
                    )
                    ->withRawScore(
                        $crossTestScore->rawScore()
                    )
                    ->get()
            );
            return $crossTestScore;
        });
    }
}