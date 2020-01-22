<?php


namespace App\ProophessorDo\Projection\ProblemCategory;


use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class ProblemCategoryFinder
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

    public function findByUuid(ProblemCategoryId $problemCategoryId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE problem_category_id = :problemCategoryId LIMIT 1',
                Table::ProblemCategory
            )
        );
        $statement->bindValue('problemCategoryId', $problemCategoryId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}