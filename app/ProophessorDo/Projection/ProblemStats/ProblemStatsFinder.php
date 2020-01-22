<?php


namespace App\ProophessorDo\Projection\ProblemStats;


use App\ProophessorDo\Model\ProblemStats\ProblemStatsId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class ProblemStatsFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(ProblemStatsId $problemStatsId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE problem_stats_id = :problemStatsId LIMIT 1',
                Table::PROBLEM_STATS
            )
        );
        $statement->bindValue('problemStatsId', $problemStatsId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}