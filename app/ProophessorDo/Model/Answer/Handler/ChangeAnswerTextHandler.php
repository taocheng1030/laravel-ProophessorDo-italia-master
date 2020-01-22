<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\ChangeAnswerText;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class ChangeAnswerTextHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(ChangeAnswerText $command)
    {
        $answer = $this->repository->get($command->answerId());
        $answer->changeContent(
            $command->text()
        );
        $this->repository->add($answer);
    }
}