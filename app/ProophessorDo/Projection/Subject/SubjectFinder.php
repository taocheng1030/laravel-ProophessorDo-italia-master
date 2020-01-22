<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Subject;

use Doctrine\DBAL\Connection;
use PDO;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Projection\Table;

class SubjectFinder
{
    /**
     * @var Connection
     */
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
        $this->connection->setFetchMode(PDO::FETCH_OBJ);
    }

    public function findByUuid(SubjectId $subjectId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE id = :subjectId LIMIT 1',
                Table::SUBJECT
            )
        );
        $statement->bindValue('subjectId', $subjectId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}