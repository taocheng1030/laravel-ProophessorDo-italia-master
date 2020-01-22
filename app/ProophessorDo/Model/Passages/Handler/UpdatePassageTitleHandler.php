<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\UpdatePassageTitle;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageTitleHandler
{
    /**
     * @var PassageRepository
     */
    private $passageRepository;

    public function __construct(PassageRepository $passageRepository)
    {
        $this->passageRepository = $passageRepository;
    }

    public function __invoke(UpdatePassageTitle $command)
    {
        $passage = $this->passageRepository->get($command->passageId());
        $passage->updateTitle(
            $command->title()
        );
        $this->passageRepository->add($passage);
    }
}