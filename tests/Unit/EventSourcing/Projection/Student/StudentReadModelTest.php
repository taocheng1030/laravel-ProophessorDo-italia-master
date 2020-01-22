<?php

namespace Tests\Unit\EventSourcing\Projection\Student;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Mockery\Mock;
use Tests\Unit\TestCase;

class StudentReadModelTest extends TestCase
{
    /**
     * @var Connection|Mock
     */
    protected $connection;

    /**
     * @var StudentReadModel
     */
    protected $readModel;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->readModel = new StudentReadModel($this->connection);
    }

    public function testInit()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNull($this->readModel->init());
    }

    public function testInitialized()
    {

        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')
            ->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn('something');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertTrue($this->readModel->isInitialized());
    }

    public function testReset()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $this->connection->shouldReceive('prepare')
        ->once()
        ->andReturn($statement);

        self::assertNull($this->readModel->reset());
    }

    public function testDelete()
    {
        $statment = Mockery::mock(Statement::class);
        $statment->shouldReceive('execute');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statment);
        self::assertNull($this->readModel->delete());
    }

    public function testInsert()
    {
        $data = [];
        $this->connection->shouldReceive('insert')
            ->once()
            ->with(Table::STUDENT, $data);
        self::assertNull($this->readModel->insert($data));
    }
}
