<?php

namespace Tests\Unit\EventSourcing\Projection\Problem;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Prooph\ProophessorDo\Projection\Problem\ProblemReadModel;
use Prooph\ProophessorDo\Projection\Table;
use Tests\Unit\TestCase;


class ProblemReadModelTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var ProblemReadModel
     */
    protected $readModel;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->readModel = new ProblemReadModel($this->connection);
    }

    public function testInit()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')
            ->once()
            ->andReturn('something');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNull($this->readModel->init());
    }

    public function testIsInitialized()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')
            ->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn(true);
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertTrue($this->readModel->isInitialized());
    }

    public function testReset()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNull($this->readModel->reset());
    }

    public function testDelete()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNull($this->readModel->delete());
    }

    public function testInsert()
    {
        $data = [];
        $this->connection->shouldReceive('insert')
            ->once()
            ->with(Table::PROBLEM, $data);
        $this->readModel->insert($data);
    }
}
