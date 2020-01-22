<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\ProblemSection\ProblemSection;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionId;
use App\ProophessorDo\Model\ProblemSection\ProblemSectionRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class ProblemSectionCollection extends AggregateRepository implements ProblemSectionRepository
{

    public function add(ProblemSection $problemSection)
    {
        $this->saveAggregateRoot($problemSection);
    }

    public function get(ProblemSectionId $problemTypeId): ProblemSection
    {
        return $this->getAggregateRoot($problemTypeId->toString());
    }
}