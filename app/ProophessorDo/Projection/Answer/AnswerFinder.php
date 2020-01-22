<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Answer;

use Doctrine\DBAL\Connection;
use PDO;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Projection\Table;

class AnswerFinder
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

    public function findByUuid(AnswerId $answerId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE answer_id = :answerId LIMIT 1',
                Table::ANSWER
            )
        );
        $statement->bindValue('answerId', $answerId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}