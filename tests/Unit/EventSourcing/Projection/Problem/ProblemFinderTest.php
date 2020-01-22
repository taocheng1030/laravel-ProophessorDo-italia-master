<?php

namespace Tests\Unit\EventSourcing\Projection\Problem;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use PDO;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Projection\Problems\ProblemFinder;
use Tests\Unit\TestCase;

class ProblemFinderTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var ProblemFinder
     */
    protected $finder;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->connection->shouldReceive('setFetchMode')
            ->once()
            ->with(PDO::FETCH_OBJ);
        $this->finder = new ProblemFinder($this->connection);
    }

    public function testFindByUuid()
    {
        $problemId = ProblemId::generate();
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('bindValue')
            ->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn('result');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNotNull($this->finder->findByUuid($problemId));
    }
}
