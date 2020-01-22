<?php

namespace Tests\Unit\EventSourcing\Projection\Phone;

use App\EventSourcing\Model\Phone\PhoneId;
use App\EventSourcing\Projection\Phone\PhoneFinder;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use PDO;
use Tests\Unit\TestCase;

class PhoneFinderTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var PhoneFinder
     */
    protected $finder;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->connection->shouldReceive('setFetchMode')
            ->once()
            ->with(PDO::FETCH_OBJ);
        $this->finder = new PhoneFinder($this->connection);
    }

    public function testFindByPhoneId()
    {
        $phoneId = PhoneId::generate();
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('bindValue')->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn('something');
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->finder->findByUuid($phoneId);
    }

    public function testCannotFindByPhoneId()
    {
        $phoneId = PhoneId::generate();
        $statement = Mockery::mock(Statement::class);
        $statement->shouldReceive('bindValue')->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn(false);
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $this->finder->findByUuid($phoneId);
    }
}
