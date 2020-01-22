<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemStats\Event;

use App\ProophessorDo\Model\ProblemStats\AnswerSelected;
use App\ProophessorDo\Model\ProblemStats\Correct;
use App\ProophessorDo\Model\ProblemStats\Incorrect;
use App\ProophessorDo\Model\ProblemStats\Pending;
use App\ProophessorDo\Model\ProblemStats\ProblemStatsId;
use App\ProophessorDo\Model\ProblemStats\Skipped;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemStatsCreated extends AggregateChanged
{

    /**
     * @var ProblemStatsId
     */
    protected $problemStatsId;

    /**
     * @var Correct
     */
    protected $correct;

    /**
     * @var Incorrect
     */
    protected $incorrect;

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var Skipped
     */
    protected $skipped;

    /**
     * @var Pending
     */
    protected $pending;

    /**
     * @var AnswerSelected
     */
    protected $answerA;

    /**
     * @var AnswerSelected
     */
    protected $answerB;

    /**
     * @var AnswerSelected
     */
    protected $answerC;

    /**
     * @var AnswerSelected
     */
    protected $answerD;

    public static function withData(
        ProblemStatsId $problemStatsId,
        ProblemId $problemId,
        Correct $correct,
        Incorrect $incorrect,
        Skipped $skipped,
        Pending $pending
    ) {
        /**
         * @var ProblemStatsCreated $event
         */
        $event = self::occur(
            $problemStatsId->toString(),
            [
                'problem_id' => $problemId->toString(),
                'correct' => $correct->toString(),
                'incorrect' => $incorrect->toString(),
                'skipped' => $skipped->toString(),
                'pending' => $pending->toString()
            ]
        );
        $event->problemStatsId = $problemStatsId;
        $event->problemId = $problemId;
        $event->correct = $correct;
        $event->incorrect = $incorrect;
        $event->skipped = $skipped;
        $event->pending = $pending;
         return $event;
    }

    public function problemStatsId(): ProblemStatsId
    {
        if (!$this->problemStatsId) {
            $this->problemStatsId = ProblemStatsId::withString($this->aggregateId());
        }
        return $this->problemStatsId;
    }

    public function problemId(): ProblemId
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->payload['problem_id']);
        }
        return $this->problemId;
    }

    public function correct(): Correct
    {
        if (!$this->correct) {
            $this->correct = Correct::fromInt($this->payload['correct']);
        }
        return $this->correct;
    }

    public function incorrect(): Incorrect
    {
        if (!$this->incorrect) {
            $this->incorrect = Incorrect::fromInt($this->payload['incorrect']);
        }
        return $this->incorrect;
    }

    public function skipped()
    {
        if (!$this->skipped) {
            $this->skipped = Skipped::fromInt($this->payload['skipped']);
        }
        return $this->skipped;
    }

    public function pending()
    {
        if (!$this->pending) {
            $this->pending = Pending::fromInt($this->payload['pending']);
        }
        return $this->pending;
    }
}