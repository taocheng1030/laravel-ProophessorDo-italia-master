<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use Prooph\ProophessorDo\Model\Answer\Answer;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class CreateAnswerHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(CreateAnswer $command)
    {
        $answer = Answer::create(
            $command->answerId(),
            $command->content(),
            $command->type(),
            $command->correctChoice(),
            $command->problemId(),
            $command->sequence()
        );
        $this->repository->add($answer);
    }
}