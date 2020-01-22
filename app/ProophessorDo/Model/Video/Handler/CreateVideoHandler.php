<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Video\Handler;


use App\ProophessorDo\Model\Video\Command\CreateVideo;
use App\ProophessorDo\Model\Video\Video;
use App\ProophessorDo\Model\Video\VideoRepository;

class CreateVideoHandler
{
    /**
     * @var VideoRepository
     */
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function __invoke(CreateVideo $command)
    {
        $video = Video::create(
            $command->videoId(),
            $command->name(),
            $command->path(),
            $command->mediaId(),
            $command->width(),
            $command->height(),
            $command->duration()
        );

        $this->videoRepository->add($video);
    }
}