<?php


namespace App\ProophessorDo\Model\Video;


use App\ProophessorDo\Model\Video\Event\VideoWasAdded;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;

class Video extends AggregateRoot
{
    use AggregateRootTrait;

    /**
     * @var VideoId
     */
    protected $videoId;

    /**
     * @var FileName
     */
    protected $name;

    /**
     * @var FilePath
     */
    protected $path;

    /**
     * @var MediaId
     */
    protected $mediaId;

    /**
     * @var VideoWasAdded
     */
    protected $width;

    /**
     * @var Height
     */
    protected $height;

    /**
     * @var Duration
     */
    protected $duration;

    public static function create(
        VideoId $videoId,
        FileName $name,
        FilePath $path,
        MediaId $mediaId,
        Width $width,
        Height $height,
        Duration $duration
    ) {
        $self = new self();
        $self->recordThat(
            VideoWasAdded::withData(
                $videoId,
                $name,
                $path,
                $mediaId,
                $width,
                $height,
                $duration
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->videoId->toString();
    }

    public function whenVideoWasAdded(VideoWasAdded $event)
    {
        $this->videoId = $event->videoId();
        $this->name = $event->name();
        $this->path = $event->path();
        $this->mediaId = $event->mediaId();
        $this->width = $event->width();
        $this->height = $event->height();
        $this->duration = $event->duration();
    }
}