<?php

namespace Tests\Unit\EventSourcing\Projection\Lesson;

use App\ProophessorDo\Projection\Lesson\LessonReadModel;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Mockery\Mock;
use Prooph\ProophessorDo\Projection\Table;
use Tests\Unit\TestCase;

class LessonReadModelTest extends TestCase
{
    /**
     * @var Connection|Mock
     */
    protected $connection;

    /**
     * @var LessonReadModel
     */
    protected $readModel;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->readModel = new LessonReadModel($this->connection);
    }

    public function testInit()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        self::assertNull($this->readModel->init());
    }

    public function testIsInitialized()
    {
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('execute');
        $statement->shouldReceive('fetch')->andReturn('result');
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
        $this->connection
            ->shouldReceive('insert')
            ->once()
            ->with(TABLE::LESSON, $data);
        self::assertNull($this->readModel->insert($data));
    }
}
