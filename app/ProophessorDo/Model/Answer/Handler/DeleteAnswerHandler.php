<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\DeleteAnswer;
use Prooph\ProophessorDo\Model\Answer\Answer;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class DeleteAnswerHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(DeleteAnswer $command)
    {
        /**
         * @var Answer $answer
         */
        $answer = $this->repository->get($command->answerId());
        $answer->delete();
        $this->repository->add($answer);
    }
}