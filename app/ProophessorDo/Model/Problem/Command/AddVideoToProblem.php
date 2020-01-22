<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Command;

use App\ProophessorDo\Model\Video\VideoId;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class AddVideoToProblem extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemId,
        string $videoId
    ) {
        return new self(
            [
                'problem_id' => $problemId,
                'video_id' => $videoId
            ]
        );
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function videoId()
    {
        return VideoId::fromString($this->payload['video_id']);
    }
}