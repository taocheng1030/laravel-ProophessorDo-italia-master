<?php
declare(strict_types=1);

namespace App\EventSourcing\Model\Section\Handler;

use App\EventSourcing\Model\Section\Command\CreateSection;
use App\ProophessorDo\Model\Section\Section;
use App\ProophessorDo\Model\Section\SectionRepository;

class CreateSectionHandler
{

    /**
     * @var SectionRepository
     */
    private $repository;

    public function __construct(SectionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateSection $command)
    {
        $section = Section::create(
            $command->sectionId(),
            $command->name()
        );
        $this->repository->add($section);
    }
}