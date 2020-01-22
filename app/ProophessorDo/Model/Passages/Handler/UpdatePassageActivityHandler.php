<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\UpdatePassageActivity;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageActivityHandler
{
    /**
     * @var PassageRepository
     */
    private $passageRepository;

    public function __construct(PassageRepository $passageRepository)
    {
        $this->passageRepository = $passageRepository;
    }

    public function __invoke(UpdatePassageActivity $command)
    {
        $passage = $this->passageRepository->get($command->passageId());
        $passage->updatePassageActivity(
            $command->activity()
        );
        $this->passageRepository->add($passage);
    }
}