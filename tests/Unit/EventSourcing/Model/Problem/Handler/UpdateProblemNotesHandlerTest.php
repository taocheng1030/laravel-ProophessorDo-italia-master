<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemNotes;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemNotesHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemNotes;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;

class UpdateProblemNotesHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var UpdateProblemNotesHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemNotesHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = UpdateProblemNotes::withData(
            ProblemId::generate()->toString(),
            ProblemNotes::fromString('this is a not')->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
