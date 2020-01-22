<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\PassageProblem;

use Doctrine\DBAL\Connection;
use Prooph\EventStore\Projection\AbstractReadModel;
use Prooph\ProophessorDo\Projection\Table;

class PassageProblemReadModel extends AbstractReadModel
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
        $tableName = Table::PASSAGE_PROBLEM;
        $sql = <<<EOT
CREATE TABLE `$tableName` (
  `id` char(36) NOT NULL,
  `passage_id` char(36) NOT NULL,
  `problem_id` char(36) NOT NULL,
  `sequence` INT(11) NOT NULL,
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
        $tableName = Table::PASSAGE_PROBLEM;
        $sql = "SHOW TABLES LIKE '$tableName'";
        $statement  = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        if (false === $result) {
            return false;
        }
        return true;
    }

    public function reset(): void
    {
        $tableName = Table::PASSAGE_PROBLEM;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(): void
    {
        $tableName = Table::PASSAGE_PROBLEM;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
}