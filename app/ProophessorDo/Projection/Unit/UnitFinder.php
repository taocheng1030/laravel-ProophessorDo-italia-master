<?php


namespace App\ProophessorDo\Projection\Unit;


use Prooph\ProophessorDo\Model\Unit\UnitId;
use Prooph\ProophessorDo\Projection\Table;

class UnitFinder
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
                Table::UNIT
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