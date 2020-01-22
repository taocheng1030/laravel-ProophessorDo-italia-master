<?php


namespace App\ProophessorDo\Projection\Passages;


use App\ProophessorDo\Model\Passages\PassageId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class PassageFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {

        $this->connection = $connection;
        $this->connection->setFetchMode(\PDO::FETCH_OBJ);
    }

    public function findByUuid(PassageId $passageId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE passage_id = :passageId LIMIT 1',
                Table::PASSAGE
            )
        );
        $statement->bindValue('passageId', $passageId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}