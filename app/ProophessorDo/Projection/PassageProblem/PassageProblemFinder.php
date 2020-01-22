<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\PassageProblem;

use App\ProophessorDo\Model\PassageProblem\PassageProblemId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class PassageProblemFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(PassageProblemId $passageProblemId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE passage_problem_id = :passageProblemId LIMIT 1',
                TABLE::PASSAGE_PROBLEM
            )
        );
        $statement->bindValue('passage_problem_id', $passageProblemId->toString());
        $result = $statement->fetch();
        if (false == $result) {
            return null;
        }
        return $result;
    }
}