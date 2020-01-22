<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Test;

use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class TestFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(UnitId $unitId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE lesson_id = :lessonId LIMIT 1',
                Table::TEST
            )
        );
        $statement->bindValue('unitId', $unitId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}