<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Projection\Problems;

use Doctrine\DBAL\Connection;
use PDO;
use Prooph\ProophessorDo\Model\Problem\ProblemId;
use Prooph\ProophessorDo\Projection\Table;

class ProblemFinder
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

    public function findByUuid(ProblemId $problemId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE problem_id = :problemId LIMIT 1',
                Table::PROBLEM
            )
        );
        $statement->bindValue('problemId', $problemId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}