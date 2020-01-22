<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Video\Event;

use App\ProophessorDo\Model\Video\Duration;
use App\ProophessorDo\Model\Video\FileName;
use App\ProophessorDo\Model\Video\FilePath;
use App\ProophessorDo\Model\Video\Height;
use App\ProophessorDo\Model\Video\MediaId;
use App\ProophessorDo\Model\Video\VideoId;
use App\ProophessorDo\Model\Video\Width;
use Prooph\EventSourcing\AggregateChanged;

class VideoWasAdded extends AggregateChanged
{

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
     * @var Width
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

    public static function withData(
        VideoId $videoId,
        FileName $name,
        FilePath $path,
        MediaId $mediaId,
        Width $width,
        Height $height,
        Duration $duration
    ) {
        /**
         * @var VideoWasAdded $event
         */
        $event = self::occur(
            $videoId->toString(),
            [
                'name' => $name->toString(),
                'path' => $path->toString(),
                'media_id' => $mediaId->toString(),
                'width' => $width->toString(),
                'height' => $height->toString(),
                'duration' => $duration->toString()
            ]
        );
        $event->videoId = $videoId;
        $event->name = $name;
        $event->path = $path;
        $event->mediaId = $mediaId;
        $event->width = $width;
        $event->height = $height;
        $event->duration = $duration;
        return $event;
    }
    
    public function videoId(): VideoId
    {
        if (!$this->videoId) {
            $this->videoId = VideoId::fromString($this->aggregateId());
        }
        return $this->videoId;
    }

    public function name(): FileName
    {
        if (!$this->name) {
            $this->name = FileName::fromString($this->payload['name']);
        }
        return $this->name;
    }

    public function path()
    {
        if (!$this->path) {
            $this->path = FilePath::fromString($this->payload['path']);
        }
        return $this->path;
    }

    public function mediaId()
    {
        if (!$this->mediaId) {
            $this->mediaId = MediaId::fromInt($this->payload['media_id']);
        }
        return $this->mediaId;
    }

    public function width()
    {
        if (!$this->width) {
            $this->width = Width::fromInt($this->payload['width']);
        }
        return $this->width;
    }

    public function height()
    {
        if (!$this->height) {
            $this->height = Height::fromInt($this->payload['height']);
        }
        return $this->height;
    }

    public function duration()
    {
        if (!$this->duration) {
            $this->duration = Duration::fromInt($this->payload['duration']);
        }
        return $this->duration;
    }
}