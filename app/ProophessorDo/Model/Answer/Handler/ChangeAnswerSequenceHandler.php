<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\Answer\Handler;

use App\ProophessorDo\Model\Answer\Command\ChangeAnswerSequence;
use Prooph\Common\Messaging\Command;
use Prooph\Common\Messaging\PayloadConstructable;
use Prooph\Common\Messaging\PayloadTrait;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class ChangeAnswerSequenceHandler
{
    /**
     * @var AnswerRepository
     */
    private $repository;

    public function __construct(AnswerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(ChangeAnswerSequence $command)
    {
        $answer = $this->repository->get($command->answerId());
        $answer->changeSequence($command->sequence());
        $this->repository->add($answer);
    }
}