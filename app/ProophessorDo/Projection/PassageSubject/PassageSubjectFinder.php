<?php


namespace App\ProophessorDo\Projection\PassageSubject;


use App\ProophessorDo\Model\PassageSubjects\PassageSubjectId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class PassageSubjectFinder
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

    public function findByUuid(PassageSubjectId $passageSubjectId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE passage_subject_id = :passageSubjectId LIMIT 1',
                Table::PASSAGE_SUBJECT
            )
        );
        $statement->bindValue('passageSubjectId', $passageSubjectId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}