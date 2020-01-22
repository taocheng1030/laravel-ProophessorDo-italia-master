<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\ProblemFormat\ProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatId;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class ProblemFormatCollection extends AggregateRepository implements ProblemFormatRepository
{

    public function add(ProblemFormat $problemFormat)
    {
        $this->saveAggregateRoot($problemFormat);
    }

    public function get(ProblemFormatId $problemFormatId): ProblemFormat
    {
        return $this->getAggregateRoot($problemFormatId->toString());
    }
}