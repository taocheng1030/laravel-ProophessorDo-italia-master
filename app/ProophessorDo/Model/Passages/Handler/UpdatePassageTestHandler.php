<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\UpdatePassageTest;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageTestHandler
{
    /**
     * @var PassageRepository
     */
    private $passageRepository;

    public function __construct(PassageRepository $passageRepository)
    {
        $this->passageRepository = $passageRepository;
    }

    public function __invoke(UpdatePassageTest $command)
    {
        $passage = $this->passageRepository->get($command->passageId());
        $passage->updateTest(
            $command->testId()
        );
        $this->passageRepository->add($passage);
    }
}