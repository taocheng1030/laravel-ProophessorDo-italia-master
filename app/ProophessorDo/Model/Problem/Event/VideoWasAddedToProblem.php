<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use App\ProophessorDo\Model\Video\VideoId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class VideoWasAddedToProblem extends AggregateChanged
{
    /**
     * @var ProblemId
     */
    private $problemId;

    /**
     * @var VideoId
     */
    private $videoId;

    public static function withData(
        ProblemId $problemId,
        VideoId $videoId
    ) {
        $event = self::occur(
            $problemId->toString(),
            [
                'video_id' => $videoId->toString()
            ]
        );
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;
    }

    public function videoId()
    {
        if (!$this->videoId) {
            $this->videoId = VideoId::fromString($this->payload['video_id']);
        }
        return $this->videoId;
    }
}