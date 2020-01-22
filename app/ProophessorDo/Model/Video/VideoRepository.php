<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Video;


interface VideoRepository
{
    public function add(Video $video);
    public function get(VideoId $video): Video;
}