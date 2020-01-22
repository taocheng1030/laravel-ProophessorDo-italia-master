<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Course;

use App\ProophessorDo\Model\Course\CourseId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class CourseFinder
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

    public function findByUuid(CourseId $courseId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE course_id = :courseId LIMIT 1',
                Table::COURSE
            )
        );
        $statement->bindValue('courseId', $courseId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}