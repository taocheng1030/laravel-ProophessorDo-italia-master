<?php
namespace Tests\Unit\EventSourcing\Projection\Organization;

use App\EventSourcing\Projection\Organization\OrganizationProjector;
use Mockery;
use Prooph\EventStore\Projection\ReadModelProjector;
use Tests\Unit\TestCase;

class OrganizationProjectorTest extends TestCase
{
    /**
     * @var OrganizationProjector
     */
    protected $projector;

    /**
     * @var ReadModelProjector|Mockery\Mock
     */
    protected $readModelProjector;

    protected function setUp()
    {
        parent::setUp();
        $this->readModelProjector = Mockery::mock(ReadModelProjector::class);
        $this->projector = new OrganizationProjector();
    }

    public function testProject()
    {
        $this->readModelProjector->shouldReceive('fromStream->when');
        self::assertInstanceOf(
            ReadModelProjector::class,
            $this->projector->project($this->readModelProjector)
        );
    }
}
