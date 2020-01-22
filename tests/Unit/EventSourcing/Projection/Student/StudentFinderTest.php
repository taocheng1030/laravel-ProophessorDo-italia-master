<?php

namespace Tests\Unit\EventSourcing\Projection\Student;

use App\EventSourcing\Model\Student\StudentId;
use App\EventSourcing\Projection\Student\StudentFinder;
use App\EventSourcing\Projection\Student\StudentReadModel;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Mockery\Mock;
use Tests\Unit\TestCase;

class StudentFinderTest extends TestCase
{
    /**
     * @var Connection|Mock
     */
    protected $connection;

    /**
     * @var StudentFinder
     */
    protected $finder;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->finder = new StudentFinder($this->connection);
    }

    public function testFindByUuid()
    {
        $studentId = StudentId::generate();
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('bindValue')
            ->once()
            ->with('studentId', $studentId->toString());
        $statement->shouldReceive('fetch')
            ->once()
            ->withNoArgs();
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->finder->findByUuid($studentId);
    }
}
