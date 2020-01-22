<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use Mockery;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\Answer\AnswerChoice;
use Prooph\ProophessorDo\Model\Answer\AnswerContent;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class CreateAnswerHandlerTest extends TestCase
{
    /**
     * @var AnswerRepository|Mock
     */
    private $repository;

    /**
     * @var CreateAnswerHandler
     */
    private $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(AnswerRepository::class);
        $this->handler = new CreateAnswerHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateAnswer::withData(
            AnswerId::generate()->toString(),
            AnswerContent::fromString('This is the content')->toString(),
            AnswerType::text()->toString(),
            AnswerChoice::incorrect()->toString(),
            ProblemId::generate()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
