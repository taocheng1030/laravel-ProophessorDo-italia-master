<?php


namespace App\ProophessorDo\Infrastructure\Repository;


use App\ProophessorDo\Model\Video\Video;
use App\ProophessorDo\Model\Video\VideoId;
use App\ProophessorDo\Model\Video\VideoRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class VideoCollection extends AggregateRepository implements VideoRepository
{

    public function add(Video $video)
    {
        $this->saveAggregateRoot($video);
    }

    public function get(VideoId $videoId): Video
    {
        return $this->getAggregateRoot($videoId);
    }
}