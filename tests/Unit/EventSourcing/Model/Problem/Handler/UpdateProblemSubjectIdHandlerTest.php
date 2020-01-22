<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Test\Model\Problem\Handler;

use Mockery;
use Prooph\ProophessorDo\Model\Problem\Command\UpdateProblemSubjectId;
use Prooph\ProophessorDo\Model\Problem\Handler\UpdateProblemSubjectIdHandler;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Model\Problem\ProblemRepository;
use Prooph\ProophessorDo\Model\Subject\SubjectId;

class UpdateProblemSubjectIdHandlerTest extends TestCase
{
    /**
     * @var ProblemRepository|Mockery\Mock
     */
    private $repository;

    /**
     * @var UpdateProblemSubjectIdHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(ProblemRepository::class);
        $this->handler = new UpdateProblemSubjectIdHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = UpdateProblemSubjectId::withData(
            ProblemId::generate()->toString(),
            SubjectId::generate()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
