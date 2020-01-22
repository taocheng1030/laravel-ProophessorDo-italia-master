<?php
declare(strict_types=1);

namespace Tests\Unit\EventSourcing\Model\Lesson\Handler;

use App\ProophessorDo\Model\Unit\UnitMultiLineLabel;
use App\ProophessorDo\Model\Unit\UnitReferenceId;
use Mockery;
use Mockery\Mock;
use Prooph\ProophessorDo\Model\Unit\Command\CreateUnit;
use Prooph\ProophessorDo\Model\Unit\Handler\CreateUnitHandler;
use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Model\Unit\UnitLabel;
use Prooph\ProophessorDo\Model\Unit\UnitRepository;
use Prooph\ProophessorDo\Model\User\UserId;
use Tests\Unit\TestCase;

class CreateUnitHandlerTest extends TestCase
{
    /**
     * @var UnitRepository|Mock
     */
    protected $repository;

    /**
     * @var CreateUnitHandler
     */
    protected $handler;

    protected function setUp()
    {
        parent::setUp();
        $this->repository = Mockery::mock(UnitRepository::class);
        $this->handler = new CreateUnitHandler($this->repository);
    }

    public function testInvoke()
    {
        $command = CreateUnit::withData(
            UnitId::generate()->toString(),
            UnitLabel::fromString('Unit #1')->toString(),
            UnitReferenceId::fromString('abc4')->toString(),
            UnitMultiLineLabel::fromString('this is a description')->toString(),
            UserId::generate()->toString()
        );
        $this->repository->shouldReceive('add');
        self::assertNull($this->handler->__invoke($command));
    }
}
