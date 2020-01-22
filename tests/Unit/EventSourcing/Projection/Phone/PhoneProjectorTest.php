<?php

namespace Tests\Unit\EventSourcing\Projection\Phone;

use App\EventSourcing\Projection\Phone\PhoneProjector;
use App\EventSourcing\Projection\User\UserProjection;
use Mockery;
use Prooph\EventStore\Projection\ReadModelProjector;
use Tests\Unit\TestCase;

class PhoneProjectorTest extends TestCase
{
    /**
     * @var UserProjection
     */
    protected $projection;

    /**
     * @var ReadModelProjector|Mockery\Mock
     */
    protected $projector;

    protected function setUp()
    {
        parent::setUp();
        $this->projection = new UserProjection();
        $this->projector = Mockery::mock(ReadModelProjector::class);
    }

    public function testProject()
    {
        $this->projector->shouldReceive('fromStream->when');
        self::assertInstanceOf(
            ReadModelProjector::class,
            $this->projection->project($this->projector)
        );
    }
}
