<?php

namespace Tests\Unit\Services\PracticeTestScoring;

use App\DTO\CrossTestScoresDTO;
use App\Repositories\CrossScoreSectionTable;
use App\Services\PracticeTestScoring\CrossTestScoresService;
use Illuminate\Support\Collection;
use Tests\TestCase;

class CrossTestScoresServiceTest extends TestCase
{
    /**
     * @var CrossScoreSectionTable
     */
    protected $repository;

    /**
     * @var CrossTestScoresService
     */
    protected $service;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = new CrossScoreSectionTable();
        $this->service = new CrossTestScoresService($this->repository);
    }

    public function testGetCrossTestScores()
    {
        $crossTestScoresDTOArray = new Collection();

        $practiceTestId = 1;

        $analysisInHistory = new CrossTestScoresDTO(
            $practiceTestId,
            1,
            15
        );

        $crossTestScoresDTOArray->push($analysisInHistory);

        $analysisInScience = new CrossTestScoresDTO(
            $practiceTestId,
            2,
            15
        );

        $crossTestScoresDTOArray->push($analysisInScience);

        $result = $this->service->getCrossTestScores($crossTestScoresDTOArray);

        $expectedScores = [
            1 => 26,
            2 => 24
        ];

        $result->map(function(CrossTestScoresDTO $value) use($expectedScores){
            self::assertSame(
                $expectedScores[$value->crossSectionId()],
                $value->score(),
                'Asserting that ' .
                $value->score() .
                ' is identical to ' .
                $expectedScores[$value->crossSectionId()] .
                ' for section id ' . $value->crossSectionId()
            );
        });

    }
}
