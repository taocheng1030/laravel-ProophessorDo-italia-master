<?php

namespace Tests\Unit\EventSourcing\Projection\Phone;

use App\EventSourcing\Projection\Phone\PhoneReadModel;
use App\EventSourcing\Projection\Table;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Tests\Unit\TestCase;

class PhoneReadModelTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var PhoneReadModel
     */
    protected $readModel;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->readModel = new PhoneReadModel($this->connection);
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

    public function testIsInitialized()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn('result');
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
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
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
            ->with(Table::PHONE, $data);
        self::assertNull($this->readModel->insert($data));
    }
}
