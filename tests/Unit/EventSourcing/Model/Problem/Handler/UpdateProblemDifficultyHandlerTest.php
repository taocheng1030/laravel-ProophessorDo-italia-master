<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemDifficultyHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemDifficultyHandlerTest extends TestCase
{
    /**
     * @var UpdateProblemDifficultyHandler
     */
    private $handler;

    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemDifficultyHandler($this->repository);
    }

    public function testInvoke()
    {
        $this->repository->shouldReceive('add')->once();
        $command = UpdateProblemDifficulty::withData(
            ProblemId::generate()->toString(),
            ProblemDifficulty::fromString(2)->toString()
        );
        self::assertNull($this->handler->__invoke($command));
    }
}
