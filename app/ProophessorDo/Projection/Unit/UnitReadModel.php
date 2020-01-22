<?php


namespace App\ProophessorDo\Projection\Unit;


use Doctrine\DBAL\Connection;
use Prooph\EventStore\Projection\AbstractReadModel;
use Prooph\ProophessorDo\Projection\Table;

class UnitReadModel extends AbstractReadModel
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
        $tableName = Table::UNIT;
        $sql = <<<EOT
CREATE TABLE `$tableName` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `multi_line_label` varchar(1000) NOT NULL,
  `reference_id` varchar(100) NOT NULL,
  `subject_id` char(36) NOT NULL,
  `created_by` char(36),
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
        $tableName = Table::UNIT;
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
        $tableName = Table::UNIT;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(): void
    {
        $tableName = Table::UNIT;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function insert(array $data)
    {
        $this->connection->insert(
            Table::UNIT,
            $data
        );
    }

    public function findAll()
    {
        $tableName = Table::UNIT;
        $statement = $this->connection->prepare(
            "SELECT * FROM $tableName;"
        );
        $statement->execute();
        return $statement->fetchAll();
    }
}