<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Lesson;


use Doctrine\DBAL\Connection;
use Prooph\ProophessorDo\Model\Lesson\LessonId;
use Prooph\ProophessorDo\Projection\Table;

class LessonFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function findByUuid(LessonId $lessonId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE lesson_id = :lessonId LIMIT 1',
                Table::LESSON
            )
        );
        $statement->bindValue('lessonId', $lessonId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}