<?php
declare(strict_types=1);

namespace App\ProophessorDo\ProcessManager;

use App\ProophessorDo\Model\Answer\Command\CreateAnswer;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerType;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasAdded;
use Prooph\ServiceBus\CommandBus;

class AddAnswersForProblemProcessManager
{
    /**
     * @var CommandBus
     */
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke(ProblemWasAdded $event)
    {
        $answers = $event->answers()->toArray();
        foreach ($answers as $answer) {
            $command = CreateAnswer::withData(
                AnswerId::generate()->toString(),
                $answer['text'],
                AnswerType::text()->toString(),
                $answer['correct'],
                $event->problemId()->toString()
            );
            $this->commandBus->dispatch($command);
        }
    }
}