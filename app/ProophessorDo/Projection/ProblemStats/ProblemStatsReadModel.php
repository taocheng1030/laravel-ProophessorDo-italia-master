<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\ProblemStats;

use App\ProblemStats;
use Doctrine\DBAL\Connection;
use Prooph\EventStore\Projection\AbstractReadModel;
use Prooph\ProophessorDo\Projection\Table;

class ProblemStatsReadModel extends AbstractReadModel
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function init(): void
    {
        $tableName = Table::PROBLEM_STATS;
        $sql = <<<EOT
CREATE TABLE `$tableName` (
  `id`char(36) NOT NULL,
  `problem_id` char(36) NOT NULL DEFAULT 0,
  `correct` INT(11) NOT NULL DEFAULT 0,
  `incorrect` INT(11) NOT NULL DEFAULT 0,
  `skipped` INT(11) NOT NULL DEFAULT 0,
  `pending` INT(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
EOT;
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function isInitialized(): bool
    {
        $tableName = Table::PROBLEM_STATS;
        $sql = "SHOW TABLES LIKE '$tableName';";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        if (false === $result) {
            return false;
        }

        return true;
    }

    public function reset(): void
    {
        $tableName = Table::PROBLEM_STATS;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(): void
    {
        $tableName = Table::PROBLEM_STATS;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    /**
     * @param ProblemStats $problemStats
     */
    public function insert(ProblemStats $problemStats)
    {
        $problemStats->save();
    }
}