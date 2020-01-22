<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;


use App\ProophessorDo\Model\Passages\Command\UpdatePassageText;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageTextHandler
{
    /**
     * @var PassageRepository
     */
    private $repository;

    public function __construct(PassageRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(UpdatePassageText $command)
    {
        $passage = $this->repository->get($command->passageId());
        $passage->updateText($command->text());
        $this->repository->add($passage);
    }
}