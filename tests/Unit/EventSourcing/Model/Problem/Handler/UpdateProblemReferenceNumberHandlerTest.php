<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemReferenceNumberHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemReferenceNumber;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemReferenceNumberHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var UpdateProblemReferenceNumberHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemReferenceNumberHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = UpdateProblemReferenceNumber::withData(
            ProblemId::generate()->toString(),
            ProblemReferenceNumber::fromString('1234abcd')->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
