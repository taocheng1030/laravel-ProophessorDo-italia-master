<?php


namespace App\ProophessorDo\Projection\PassageSubject;


use App\PassageSubject;
use App\ProophessorDo\Model\PassageSubjects\Event\PassageSubjectWasAdded;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class PassageSubjectProjector implements ReadModelProjection
{
    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    PassageSubjectWasAdded::class => function($state, PassageSubjectWasAdded $event) {
                        $readModel = $this->readModel();
                        PassageSubject::flushCache();
                        $passageSubject = new PassageSubject();
                        $passageSubject->id = $event->aggregateId();
                        $passageSubject->label = $event->label()->toString();
                        $passageSubject->abbreviation = $event->abbreviation()->toString();
                        $passageSubject->active = $event->active()->toString();
                        $readModel->stack(
                            'insert',
                            $passageSubject
                        );
                    }
                ]
            );
        return $projector;
    }
}