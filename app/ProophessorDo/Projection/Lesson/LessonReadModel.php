<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Lesson;


use Doctrine\DBAL\Connection;
use Prooph\EventStore\Projection\AbstractReadModel;
use Prooph\ProophessorDo\Projection\Table;

class LessonReadModel extends AbstractReadModel
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
        $tableName = Table::LESSON;
        $sql = <<<EOT
CREATE TABLE `$tableName` (
  `id` char(36) NOT NULL,
  `reference_id` INT NOT NULL,
  `type` varchar(100) NOT NULL,
  `sequence` INT,
  `subject_id` CHAR(36) NOT NULL,
  `unit_id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `multi_line_title` TEXT NOT NULL,
  `description` TEXT NOT NULL,
  `starting_page` INT NOT NULL,
  `ending_page` INT NOT NULL,
  `challenge_page` INT NOT NULL,
  `practice_page` INT NOT NULL,
  `drill_page` INT NOT NULL,
  `created_by` char(36),
  `status` tinyint(1) NOT NULL,
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
        $tableName = Table::LESSON;
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
        $tableName = Table::LESSON;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(): void
    {
        $tableName = Table::LESSON;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function insert(array $data): void
    {
        $this->connection->insert(
            Table::LESSON,
            $data
        );
    }

    public function findAll()
    {
        $tableName = Table::LESSON;
        $statement = $this->connection->prepare(
            "SELECT * FROM $tableName;"
        );
        $statement->execute();
        return $statement->fetchAll();
    }
}