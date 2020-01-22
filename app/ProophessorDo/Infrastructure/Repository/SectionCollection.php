<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use App\ProophessorDo\Model\Section\Section;
use App\ProophessorDo\Model\Section\SectionId;
use App\ProophessorDo\Model\Section\SectionRepository;
use Prooph\EventSourcing\Aggregate\AggregateRepository;

class SectionCollection extends AggregateRepository implements SectionRepository
{

    public function add(Section $section)
    {
        $this->saveAggregateRoot($section);
    }

    public function get(SectionId $sectionId)
    {
        $this->getAggregateRoot($sectionId->toString());
    }
}