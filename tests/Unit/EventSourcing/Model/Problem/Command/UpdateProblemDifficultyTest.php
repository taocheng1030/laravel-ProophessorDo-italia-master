<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Command;

use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class UpdateProblemDifficultyTest extends TestCase
{
    /**
     * @var UpdateProblemDifficulty
     */
    private $command;

    protected function setUp()
    {
        parent::setUp();
        $this->command = UpdateProblemDifficulty::withData(
            ProblemId::generate()->toString(),
            ProblemDifficulty::fromString(4)->toString()
        );
    }

    public function testProblemId()
    {
        self::assertInstanceOf(ProblemId::class, $this->command->problemId());
    }

    public function testDifficulty()
    {
        self::assertInstanceOf(ProblemDifficulty::class, $this->command->difficulty());
    }
}
