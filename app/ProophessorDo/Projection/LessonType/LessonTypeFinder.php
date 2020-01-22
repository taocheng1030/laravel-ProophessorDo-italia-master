<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\LessonType;


use App\ProophessorDo\Model\LessonType\LessonTypeId;
use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Projection\Table;

class LessonTypeFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(LessonTypeId $lessonTypeId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE lesson_type_id = :lessonTypeId LIMIT 1',
                TABLE::LESSON_TYPE
            )
        );
        $statement->bindValue('lessonTypeId', $lessonTypeId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}