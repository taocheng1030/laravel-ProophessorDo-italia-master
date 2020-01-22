<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Answer;

use App\Answer;
use App\ProophessorDo\Model\Answer\Event\AnswerChoiceChanged;
use App\ProophessorDo\Model\Answer\Event\AnswerSequenceChanged;
use App\ProophessorDo\Model\Answer\Event\AnswerWasCreated;
use App\ProophessorDo\Model\Answer\Event\AnswerWasDeleted;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use function foo\func;
use Prooph\EventStore\Projection\ReadModelProjector;

class AnswerProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    AnswerWasCreated::class => function ($state, AnswerWasCreated $event) {
                        $readModel = $this->readModel();
                        $readModel->stack(
                            'insert',
                            [
                                'id' => $event->answerId()->toString(),
                                'text' => $event->content()->toString(),
                                'type' => $event->type()->toString(),
                                'correct' => (int)$event->correctChoice()->toString(),
                                'problem_id' => $event->problemId()->toString(),
                                'sequence' => $event->sequence()->toString()
                            ]
                        );
                    },
                    AnswerWasDeleted::class => function($state, AnswerWasDeleted $event) {
                        Answer::flushCache();
                        Answer::find('id', $event->answerId()->toString())->delete();
                    },
                    AnswerChoiceChanged::class => function($state, AnswerChoiceChanged $event) {
                        Answer::flushCache();
                        $answer = Answer::find($event->answerId()->toString());
                        $answer->correct = $event->choice()->toString();
                        $answer->save();
                    },
                    AnswerSequenceChanged::class => function($state, AnswerSequenceChanged $event) {
                        Answer::flushCache();
                        $answer = Answer::find('id', $event->answerId()->toString());
                        $answer->sequence = $event->sequence()->toString();
                        $answer->save();
                    }
                ]
            );
        return $projector;
    }
}