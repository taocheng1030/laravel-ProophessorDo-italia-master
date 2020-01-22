<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\ProblemFormat;

use App\ProophessorDo\Model\ProblemFormat\ProblemFormatId;
use Doctrine\DBAL\Connection;
use PDO;
use Prooph\ProophessorDo\Projection\Table;

class ProblemFormatFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
        $this->connection->setFetchMode(PDO::FETCH_OBJ);
    }

    public function findByUuid(ProblemFormatId $problemFormatId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE id = :problemFormatId LIMIT 1',
                Table::PROBLEM_FORMAT
            )
        );
        $statement->bindValue('problemFormatId', $problemFormatId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}