<?php

namespace Tests\Unit\EventSourcing\Projection\Lesson;

use App\ProophessorDo\Projection\Lesson\LessonProjector;
use Mockery;
use Prooph\EventStore\Projection\ReadModelProjector;
use Tests\Unit\TestCase;

class LessonProjectorTest extends TestCase
{
    /**
     * @var LessonProjection
     */
    protected $projection;

    /**
     * @var ReadModelProjector|Mockery\Mock
     */
    protected $projector;

    protected function setUp()
    {
        parent::setUp();
        $this->projection = new LessonProjector();
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
