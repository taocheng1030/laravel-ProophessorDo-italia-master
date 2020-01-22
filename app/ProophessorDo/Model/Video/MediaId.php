<?php


namespace App\ProophessorDo\Model\Video;


use Webmozart\Assert\Assert;

class MediaId
{

    private $mediaId;

    public static function fromInt($mediaId)
    {
        return new self($mediaId);
    }

    private function __construct(int $mediaId)
    {
        $this->mediaId = $mediaId;
    }

    public function toString()
    {
        return $this->mediaId;
    }
}