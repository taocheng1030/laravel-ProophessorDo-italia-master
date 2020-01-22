<?php


namespace App\ProophessorDo\Model\ProblemFormat\Handler;


use App\ProophessorDo\Model\ProblemFormat\Command\CreateProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormat;
use App\ProophessorDo\Model\ProblemFormat\ProblemFormatRepository;

class CreateProblemFormatHandler
{
    /**
     * @var ProblemFormatRepository
     */
    private $problemFormatRepository;

    public function __construct(ProblemFormatRepository $problemFormatRepository)
    {
        $this->problemFormatRepository = $problemFormatRepository;
    }

    public function __invoke(CreateProblemFormat $command)
    {
        $problemFormat = ProblemFormat::withData(
            $command->id(),
            $command->name(),
            $command->active()
        );
        $this->problemFormatRepository->add($problemFormat);
    }
}