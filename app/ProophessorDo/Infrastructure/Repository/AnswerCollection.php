<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use Prooph\EventSourcing\Aggregate\AggregateRepository;
use Prooph\ProophessorDo\Model\Answer\Answer;
use Prooph\ProophessorDo\Model\Answer\AnswerId;
use Prooph\ProophessorDo\Model\Answer\AnswerRepository;

class AnswerCollection extends AggregateRepository implements AnswerRepository
{

    public function add(Answer $answer)
    {
        $this->saveAggregateRoot($answer);
    }

    public function get(AnswerId $answerId): Answer
    {
        return $this->getAggregateRoot($answerId->toString());
    }
}