<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\UpdatePassageNote;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageNoteHandler
{
    /**
     * @var PassageRepository
     */
    private $repository;

    public function __construct(PassageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdatePassageNote $command)
    {
        $passage = $this->repository->get($command->passageId());
        $passage->updateNote(
            $command->note()
        );
        $this->repository->add($passage);
    }
}