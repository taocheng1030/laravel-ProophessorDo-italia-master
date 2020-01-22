<?php

namespace Tests\Unit\Services\PracticeTestScoring;

use App\Repositories\EquatingScoreTableRepository;
use App\Services\PracticeTestScoring\ReadingAndWritingEquatingScoringService;
use Tests\TestCase;

class ReadingAndWritingSectionScoringServiceTest extends TestCase
{
    /**
     * @var ReadingAndWritingEquatingScoringService
     */
    protected $service;

    protected function setUp()
    {
        parent::setUp();
        $reading = 20;
        $writing = 28;
        $practiceTestId = 1;
        $scoringRepository = EquatingScoreTableRepository::withTest(
            $practiceTestId
        );

        $this->service = ReadingAndWritingEquatingScoringService::withScores(
            $reading,
            $writing,
            $scoringRepository
        );
    }

    public function testGetScore()
    {
        self::assertEquals(500, $this->service->getEquatingScore());
    }
}
