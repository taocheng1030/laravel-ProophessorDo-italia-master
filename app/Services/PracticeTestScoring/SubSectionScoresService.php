<?php


namespace App\Services\PracticeTestScoring;


use App\DTO\SubScoreSectionDTO;
use App\Repositories\SubScoreSectionTableRepository;
use Illuminate\Support\Collection;

class SubSectionScoresService
{
    /**
     * @var SubScoreSectionTableRepository
     */
    private $repository;

    public function __construct(
        SubScoreSectionTableRepository $repository
    ) {

        $this->repository = $repository;
    }

    /**
     * @param Collection $subScoreSections
     * @return Collection
     */
    public function getSubSectionScores(Collection $subScoreSections): Collection
    {
        return $subScoreSections->map(function(SubScoreSectionDTO $value) {
            $value->setScore(
                $this->repository
                    ->forPracticeTest(
                        $value->practiceTestId()
                    )
                    ->withSubScoreSection(
                        $value->subScoreSectionId()
                    )
                    ->withRawScore(
                        $value->rawScore()
                    )
                    ->get()
            );
            return $value;
        });
    }

}