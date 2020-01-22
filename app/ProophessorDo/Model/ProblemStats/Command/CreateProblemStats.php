<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats\Command;

use App\ProophessorDo\Model\ProblemStats\AnswerSelected;
use App\ProophessorDo\Model\ProblemStats\Correct;
use App\ProophessorDo\Model\ProblemStats\Incorrect;
use App\ProophessorDo\Model\ProblemStats\Pending;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsId;
use App\ProophessorDo\Model\ProblemStats\Skipped;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class CreateProblemStats extends Command implements PayloadConstructable
{
    use PayloadTrait;

    public static function withData(
        string $problemStatsId,
        string $problemId,
        int $correct,
        int $incorrect,
        int $skipped,
        int $pending
    ) {
        return new self(
            [
                'problem_stats_id' => $problemStatsId,
                'problem_id' => $problemId,
                'correct' => $correct,
                'incorrect' => $incorrect,
                'skipped' => $skipped,
                'pending' => $pending
            ]
        );
    }

    public function problemStatsId()
    {
        return ProblemStatsId::withString($this->payload['problem_stats_id']);
    }

    public function problemId()
    {
        return ProblemId::fromString($this->payload['problem_id']);
    }

    public function correct()
    {
        return Correct::fromInt((int) $this->payload['correct']);
    }

    public function incorrect()
    {
        return Incorrect::fromInt((int) $this->payload['incorrect']);
    }

    public function skipped()
    {
        return Skipped::fromInt((int) $this->payload['skipped']);
    }

    public function pending()
    {
        return Pending::fromInt((int) $this->payload['pending']);
    }
}