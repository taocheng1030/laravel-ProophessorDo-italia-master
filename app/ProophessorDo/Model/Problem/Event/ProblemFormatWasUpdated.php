<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Problem\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Problem\ProblemFormat;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemFormatWasUpdated extends AggregateChanged
{

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var ProblemFormat
     */
    protected $format;

    public static function withData(ProblemId $problemId, ProblemFormat $oldFormat, ProblemFormat $format)
    {
        $event = self::occur(
            $problemId->toString(),
            [
                'oldFormat' => $oldFormat->toString(),
                'format' => $format->toString()
            ]
        );
        $event->format = $format;
        return $event;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->aggregateId());
        }
        return $this->problemId;

    }

    public function format()
    {
        if (!$this->format) {
            $this->format = ProblemFormat::fromString($this->payload['format']);
        }
        return $this->format;

    }
}