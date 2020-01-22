<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemFormat;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemFormatHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemFormatHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var UpdateProblemFormatHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemFormatHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = UpdateProblemFormat::withData(
            ProblemId::generate()->toString(),
            ProblemFormat::multipleChoice()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
