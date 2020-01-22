<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Video;

use App\ProophessorDo\Model\Video\VideoId;
use Doctrine\DBAL\Connection;

class VideoFinder
{
    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
        $this->connection->setFetchMode(PDO::FETCH_OBJ);
    }

    public function findByUuid(VideoId $videoId)
    {
        $statement = $this->connection->prepare(
            sprintf(
                'SELECT * FROM %s WHERE video_id = :videoId LIMIT 1',
                TABLE::VIDEO
            )
        );
        $statement->bindValue('videoId', $videoId->toString());
        $result = $statement->fetch();
        if (false === $result) {
            return null;
        }
        return $result;
    }
}