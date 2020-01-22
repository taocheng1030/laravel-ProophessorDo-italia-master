<?php

namespace Tests\Unit\EventSourcing\Projection\Problem;

use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Mockery;
use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Projection\Problem\ProblemProjector;
use Tests\Unit\TestCase;

class ProblemProjectorTest extends TestCase
{
    /**
     * @var ProblemProjector
     */
    protected $projection;

    /**
     * @var ReadModelProjector|Mockery\Mock
     */
    protected $projector;

    protected function setUp()
    {
        parent::setUp();
        $this->projection = new ProblemProjector();
        $this->projector = Mockery::mock(ReadModelProjector::class);
    }

    public function testProject()
    {
        $this->markTestSkipped('something is wrong with mocking projector');
        $this->projector->shouldReceive('fromStream->when')
            ->once()->andReturn($this->projector);
        self::assertInstanceOf(
            ReadModelProjector::class,
            $this->projection->project($this->projector)
        );
    }
}
