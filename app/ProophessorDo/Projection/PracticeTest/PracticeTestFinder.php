<?php


namespace App\ProophessorDo\Projection\PracticeTest;


use App\ProophessorDo\Model\PracticeTest\PracticeTestId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class PracticeTestFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(PracticeTestId $practiceTestId) {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE practice_test_id = :practiceTestId LIMIT 1',
                Table::PRACTICE_TEST
            )
        );
        $statement->bindValue('practiceTestId', $practiceTestId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}