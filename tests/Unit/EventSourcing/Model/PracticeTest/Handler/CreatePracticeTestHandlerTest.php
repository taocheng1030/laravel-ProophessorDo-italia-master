<?php

namespace Tests\Unit\EventSourcing\Model\PracticeTest\Handler;

use App\ProophessorDo\Model\PracticeTest\Command\CreatePracticeTest;
use App\ProophessorDo\Model\PracticeTest\Handler\CreatePracticeTestHandler;
use App\ProophessorDo\Model\PracticeTest\PracticeTestDescription;
use App\ProophessorDo\Model\PracticeTest\PracticeTestFormCode;
use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestName;
use App\ProophessorDo\Model\PracticeTest\PracticeTestReferenceId;
use App\ProophessorDo\Model\PracticeTest\PracticeTestRepository;
use App\ProophessorDo\Model\Test\TestId;
use Mockery;
use Mockery\Mock;
use PHPUnit\Framework\TestCase;
use Prooph\ProophessorDo\Model\User\UserId;

class CreatePracticeTestHandlerTest extends TestCase
{
    /**
     * @var PracticeTestRepository|Mock
     */
    protected $repository;

    /**
     * @var CreatePracticeTestHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(PracticeTestRepository::class);
        $this->handler = new CreatePracticeTestHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreatePracticeTest::withData(
            PracticeTestId::generate()->toString(),
            PracticeTestName::fromString('test1')->toString(),
            PracticeTestDescription::fromString('this is the description')->toString(),
            PracticeTestFormCode::fromString('61B')->toString(),
            PracticeTestReferenceId::fromString('RefId1')->toString(),
            TestId::generate()->toString(),
            UserId::generate()->toString()
        );
        $this->repository->shouldReceive('add')->once();
        self::assertNull($this->handler->__invoke($command));
    }
}
