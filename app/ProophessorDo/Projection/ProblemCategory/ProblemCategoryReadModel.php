<?php


namespace App\ProophessorDo\Projection\ProblemCategory;


use App\ProblemCategory;
use Doctrine\DBAL\Connection;
use Illuminate\Support\Facades\Artisan;
use Prooph\EventStore\Projection\AbstractReadModel;
use Prooph\ProophessorDo\Projection\Table;

class ProblemCategoryReadModel extends AbstractReadModel
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
        $tableName = Table::ProblemCategory;
        $sql = <<<EOT
Create Table `$tableName` (
    `id` char(36) NOT NULL,
    `problem_id` char(36) NOT NULL,
    `category_id` char(36) NOT NULL,
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
        $tableName = Table::PROBLEM_CATEGORY;
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
        $tableName = Table::PROBLEM_CATEGORY;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(): void
    {
        $tableName = Table::PROBLEM_CATEGORY;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function insert(ProblemCategory $problemCategory): void
    {
        $problemCategory->save();
    }
}