<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;


use App\ProophessorDo\Model\Passages\Command\DeletePassage;
use App\ProophessorDo\Model\Passages\PassageRepository;

class DeletePassageHandler
{
    /**
     * @var PassageRepository
     */
    private $repository;

    public function __construct(PassageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(DeletePassage $command)
    {
        $passage = $this->repository->get($command->passageId());
        $passage->delete();
        $this->repository->add($passage);
    }
}