<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemDifficulty;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemDifficultyWasUpdated extends AggregateChanged
{

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var ProblemDifficulty
     */
    protected $difficulty;

    public static function withData(
        ProblemId $problemId,
        ProblemDifficulty $oldDifficulty,
        ProblemDifficulty $difficulty
    ) {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldDifficulty' => $oldDifficulty->toString(),
                'difficulty' => $difficulty->toString()
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

    public function difficulty()
    {
        if (!$this->difficulty) {
            $this->difficulty = ProblemDifficulty::fromString($this->payload['difficulty']);
        }
        return $this->difficulty;
    }
}