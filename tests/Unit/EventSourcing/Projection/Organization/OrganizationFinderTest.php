<?php

namespace Tests\Unit\EventSourcing\Projection\Organization;

use App\EventSourcing\Model\Organization\OrganizationId;
use App\EventSourcing\Projection\Organization\OrganizationFinder;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Statement;
use Mockery;
use Tests\Unit\TestCase;

class OrganizationFinderTest extends TestCase
{
    /**
     * @var Connection|Mockery\Mock
     */
    protected $connection;

    /**
     * @var OrganizationFinder
     */
    protected $finder;

    protected function setUp()
    {
        parent::setUp();
        $this->connection = Mockery::mock(Connection::class);
        $this->connection->shouldReceive('setFetchMode');
        $this->finder = new OrganizationFinder(
            $this->connection
        );
    }

    public function testFindByOrgId()
    {
        $userId = OrganizationId::generate();
        $statement = Mockery::mock(Statement::class);
        $this->connection->shouldReceive('prepare')
            ->once()
            ->andReturn($statement);
        $statement->shouldReceive('bindValue')->once();
        $statement->shouldReceive('fetch')
            ->once()
            ->andReturn('result');
        $this->finder->findByOrgId($userId);
    }
}
