<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Handler;

use Mockery;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemActivity;
use Prooph\ProophessorDo\Model\Problem\ProblemActive;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemActivityHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var UpdateProblemActivityHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemActivityHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = UpdateProblemActivity::withData(
            ProblemId::generate()->toString(),
            ProblemActive::inactive()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
