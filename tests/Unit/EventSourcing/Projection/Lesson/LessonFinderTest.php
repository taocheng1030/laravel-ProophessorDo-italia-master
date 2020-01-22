<?php

namespace Tests\Unit\EventSourcing\Projection\Lesson;

use App\ProophessorDo\Projection\Lesson\LessonFinder;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Mockery\Mock;
use PDO;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Tests\Unit\TestCase;

class LessonFinderTest extends TestCase
{
    /**
     * @var Connection|Mock
     */
    protected $connection;

    /**
     * @var LessonFinder
     */
    protected $finder;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->connection->shouldReceive('setFetchMode')->with(PDO::FETCH_OBJ);
        $this->finder = new LessonFinder($this->connection);
    }

    public function testFindByUuid()
    {
        $lessonId = LessonId::generate();
        $statement = Mockery::mock(Statement::class);
        $this->connection->shouldReceive('prepare')->andReturn($statement);
        $statement->shouldReceive('bindValue');
        $statement->shouldReceive('fetch')->andReturn('result');
        $this->finder->findByUuid($lessonId);
    }
}
