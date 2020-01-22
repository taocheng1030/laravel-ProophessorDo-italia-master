<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\MarkAnswerCorrect;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class MarkAnswerCorrectHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(MarkAnswerCorrect $command)
    {
        $answer = $this->repository->get($command->answerId());
        $answer->markChoice($command->correct());
        $this->repository->add($answer);
    }
}