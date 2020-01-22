<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Projection\Problem;

use App\Problem;
use Prooph\ProophessorDo\Projection\Table;
use Doctrine\DBAL\Connection;
use Prooph\EventStore\Projection\AbstractReadModel;

class ProblemReadModel extends AbstractReadModel
{
    /**
     * @var Connection
     */
    protected $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function init(): void
    {
        $tableName = Table::PROBLEM;
        $sql = <<<EOT
CREATE TABLE `$tableName` (
  `id`char(36) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference_number` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` char(36) NOT NULL,
  `format` VARCHAR (100) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `section_id` char(36) NOT NULL,
  `video_id` CHAR(36) NULL,
  `active` tinyint(2) DEFAULT false,
  `notes` text COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
EOT;
        $statement = $this->connection->prepare($sql);
        $statement->execute();

    }

    /**
     * @return bool
     * @throws \Doctrine\DBAL\DBALException
     */
    public function isInitialized(): bool
    {
        $tableName = Table::PROBLEM;
        $sql = "SHOW TABLES LIKE '$tableName';";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetch();
        if (false === $result) {
            return false;
        }

        return true;
    }

    /**
     * @throws \Doctrine\DBAL\DBALException
     */
    public function reset(): void
    {
        $tableName = Table::PROBLEM;
        $sql = "TRUNCATE TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    /**
     * @throws \Doctrine\DBAL\DBALException
     */
    public function delete(): void
    {
        $tableName = Table::PROBLEM;
        $sql = "DROP TABLE $tableName;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    /**
     * @param Problem $problem
     */
    public function insert(Problem $problem)
    {
        $problem->save();
    }

    public function updateReferenceNumber(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->reference_number = $data['reference_number'];
        $problem->save();
    }

    public function updateActivity(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->active = (int)$data['active'];
        $problem->save();
    }

    public function updateDifficulty(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->difficulty = $data['difficulty'];
        $problem->save();
    }

    public function updateFormat(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->format = $data['format'];
        $problem->save();
    }

    public function updateNote(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->notes = $data['note'];
        $problem->save();
    }

    public function updateText(array $data)
    {
        $problem = Problem::find($data['id']);
        $problem->text = $data['text'];
        $problem->save();
    }

    public function findAll()
    {
        $tableName = Table::PROBLEM;
        $statement = $this->connection->prepare(
            "SELECT * FROM $tableName;"
        );
        $statement->execute();
        return $statement->fetchAll();
    }
}