<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Section;

use App\ProophessorDo\Model\Section\SectionId;
use Doctrine\DBAL\Connection;
use PDO;
use Prooph\ProophessorDo\Projection\Table;

class SectionFinder
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

    public function findByUuid(SectionId $sectionId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE id = :sectionId LIMIT 1',
                Table::SECTION
            )
        );
        $statement->bindValue('sectionId', $sectionId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}