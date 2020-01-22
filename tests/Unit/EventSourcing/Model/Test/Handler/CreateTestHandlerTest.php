<?php
declare(strict_types=1);

use App\ProophessorDo\Model\Test\TestRepository;
use Prooph\ProophessorDo\Model\Test\Command\CreateTestHandler;
use Tests\Unit\TestCase;

class CreateTestHandlerTest extends TestCase
{
    /**
     * @var TestRepository | \Mockery\Mock
     */
    private $repository;

    /**
     * @var CreateTestHandler
     */
    private $handler;

    public function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(TestRepository::class);
        $this->handler = new CreateTestHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = \Prooph\ProophessorDo\Model\Test\Command\CreateTest::withDate(
            \App\ProophessorDo\Model\Test\TestId::generate()->toString(),
            \App\ProophessorDo\Model\Test\TestName::fromString('SAT')->toString()
        );
        $this->repository->shouldReceive('add')->once();
        $this->handler->__invoke($command);
    }
}
