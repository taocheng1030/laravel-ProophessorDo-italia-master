<?php


namespace App\ProophessorDo\Model\Video\Command;


use App\ProophessorDo\Model\Video\Duration;
use App\ProophessorDo\Model\Video\FileName;
use App\ProophessorDo\Model\Video\FilePath;
use App\ProophessorDo\Model\Video\Height;
use App\ProophessorDo\Model\Video\MediaId;
use App\ProophessorDo\Model\Video\VideoId;
use App\ProophessorDo\Model\Video\Width;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;

class CreateVideo extends Command implements PayloadConstructable
{
    use PayloadTrait;
    public static function withData(
        string $videoId,
        string $filename,
        string $filePath,
        string $mediaId,
        string $width,
        string $height,
        string $duration
    )
    {
        return new self(
            [
                'id' => $videoId,
                'name' => $filename,
                'path' => $filePath,
                'media_id' => $mediaId,
                'width' => $width,
                'height' => $height,
                'duration' => $duration
            ]
        );
    }

    public function videoId()
    {
        return VideoId::fromString($this->payload['id']);
    }

    public function name()
    {
        return FileName::fromString($this->payload['name']);
    }

    public function path()
    {
        return FilePath::fromString($this->payload['path']);
    }

    public function mediaId()
    {
        return MediaId::fromInt($this->payload['media_id']);
    }

    public function width()
    {
        return Width::fromInt((int) $this->payload['width']);
    }

    public function height()
    {
        return Height::fromInt((int) $this->payload['height']);
    }

    public function duration()
    {
        return Duration::fromInt((int) $this->payload['duration']);
    }

}