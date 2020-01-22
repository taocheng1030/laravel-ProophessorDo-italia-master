<?php


namespace App\ProophessorDo\Projection\Video;


use App\ProophessorDo\Model\Video\Event\VideoWasAdded;
use App\Video;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Doctrine\DBAL\Connection;

use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Projection\Table;

class VideoProjector implements ReadModelProjection
{
    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    VideoWasAdded::class => function($state, VideoWasAdded $event) {
                        $readModel = $this->readModel();
                        Video::flushCache();
                        $video = new Video();
                        $video->id = $event->aggregateId();
                        $video->name = $event->name()->toString();
                        $video->path = $event->path()->toString();
                        $video->media_id = $event->mediaId()->toString();
                        $video->width = $event->width()->toString();
                        $video->height = $event->height()->toString();
                        $video->duration = $event->duration()->toString();
                        $readModel->stack(
                            'insert',
                            $video
                        );
                    }
                ]
            );
        return $projector;
    }
}