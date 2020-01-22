<?php

namespace Tests\Unit\Services\PracticeTestScoring;

use App\Repositories\EquatingScoreTableRepository;
use App\Services\PracticeTestScoring\MathEquatingScoringService;
use Tests\TestCase;

class MathSectionScoringServiceTest extends TestCase
{

    /**
     * @var MathEquatingScoringService
     */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $mathNoCalculator = 10;
        $mathWithCalculator = 12;
        $practiceTestId = 1;
        $scoringRepository = EquatingScoreTableRepository::withTest(
            $practiceTestId
        );
        $this->service = MathEquatingScoringService::withScores(
            $mathNoCalculator,
            $mathWithCalculator,
            $scoringRepository
        );
    }

    public function testGetScore()
    {
        self::assertEquals(470, $this->service->getEquatingScore());
    }
}
