<?php


namespace App\ProophessorDo\Model\Passages\Handler;


use App\ProophessorDo\Model\Passages\Command\AddPassage;
use App\ProophessorDo\Model\Passages\Passage;
use App\ProophessorDo\Model\Passages\PassageRepository;

class AddPassageHandler
{
    /**
     * @var PassageRepository
     */
    private $passageRepository;

    public function __construct(PassageRepository $passageRepository)
    {
        $this->passageRepository = $passageRepository;
    }

    public function __invoke(AddPassage $addPassage)
    {
        $passage = Passage::create(
            $addPassage->passageId(),
            $addPassage->referenceId(),
            $addPassage->passageText(),
            $addPassage->passageTitle(),
            $addPassage->testId(),
            $addPassage->subjectId(),
            $addPassage->passageActive(),
            $addPassage->notes()
        );

        $this->passageRepository->add($passage);
    }


}