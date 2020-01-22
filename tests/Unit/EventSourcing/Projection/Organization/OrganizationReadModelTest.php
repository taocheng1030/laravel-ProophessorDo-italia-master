<?php

namespace Tests\Unit\EventSourcing\Projection\Organization;

use App\EventSourcing\Projection\Organization\OrganizationReadModel;
use App\EventSourcing\Projection\Table;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Tests\Unit\TestCase;

class OrganizationReadModelTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var OrganizationReadModel
     */
    protected $readModel;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->readModel = new OrganizationReadModel(
            $this->connection
        );
    }

    public function testInit()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->readModel->init();
    }

    public function testIsInitialized()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')
            ->once();
        $statement->shouldReceive('fetch');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->readModel->isInitialized();
    }

    public function testReset()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->readModel->reset();
    }

    public function testDelete()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute')->once();
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->readModel->delete();
    }

    public function testInsert()
    {
        $data = [];
        $this->connection->shouldReceive('insert')
            ->once()
            ->with(Table::ORGANIZATION, $data)
            ->andReturnNull();
        $this->readModel->insert($data);
    }
}
