<?php
declare(strict_types=1);

namespace Tests\Unit\Services\PracticeTestScoring;

use App\DTO\SubScoreSectionDTO;
use App\Repositories\SubScoreSectionTableRepository;
use App\Services\PracticeTestScoring\SubSectionScoresService;
use Illuminate\Support\Collection;
use Tests\TestCase;


class SubSectionScoresServiceTest extends TestCase
{
    /**
     * @var SubScoreSectionTableRepository
     */
    protected $repository;

    /**
     * @var SubSectionScoresService
     */
    protected $service;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = new SubScoreSectionTableRepository();
        $this->service = new SubSectionScoresService($this->repository);
    }

    public function testGetSectionScores() {
        $subSectionScoresDTOArray = new Collection();

        $heartOfAlgebraDTO = new SubScoreSectionDTO(1, 1, 15);
        $subSectionScoresDTOArray->push($heartOfAlgebraDTO);

        $problemSolvingAndDataAnalysis = new SubScoreSectionDTO(1, 2, 15);
        $subSectionScoresDTOArray->push($problemSolvingAndDataAnalysis);

        $passportToAdvancedMath = new SubScoreSectionDTO(1, 3, 15);
        $subSectionScoresDTOArray->push($passportToAdvancedMath);

        $expressionOfIdeas = new SubScoreSectionDTO(1, 4, 15);
        $subSectionScoresDTOArray->push($expressionOfIdeas);

        $standardEnglishConventions = new SubScoreSectionDTO(1, 5, 15);
        $subSectionScoresDTOArray->push($standardEnglishConventions);

        $wordsInContext = new SubScoreSectionDTO(1, 6, 15);
        $subSectionScoresDTOArray->push($wordsInContext);

        $commandsOfEvidence = new SubScoreSectionDTO(1, 7, 15);
        $subSectionScoresDTOArray->push($commandsOfEvidence);

        $result = $this->service->getSubSectionScores($subSectionScoresDTOArray);
        self::assertInstanceOf(Collection::class, $result);

        $expectedScores = [
            1 => 10,
            2 => 13,
            3 => 14,
            4 => 10,
            5 => 10,
            6 => 12,
            7 => 13,

        ];

        $result->map(function(SubScoreSectionDTO $value) use ($expectedScores) {
            self::assertSame(
                $expectedScores[$value->subScoreSectionId()],
                $value->score(),
                'Asserting that ' .
                $value->score() .
                ' is identical to ' .
                $expectedScores[$value->subScoreSectionId()] .
                ' for section id ' . $value->subScoreSectionId()
            );
        });
    }
}
