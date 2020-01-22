<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Passages\Handler;

use App\ProophessorDo\Model\Passages\Command\UpdatePassageSubject;
use App\ProophessorDo\Model\Passages\PassageRepository;

class UpdatePassageSubjectHandler
{
    /**
     * @var PassageRepository
     */
    private $passageRepository;

    public function __construct(PassageRepository $passageRepository)
    {
        $this->passageRepository = $passageRepository;
    }

    public function __invoke(UpdatePassageSubject $command)
    {
        $passage = $this->passageRepository->get($command->passageId());
        $passage->updatePassageSubject(
            $command->passageSubjectId()
        );
        $this->passageRepository->add($passage);
    }
}