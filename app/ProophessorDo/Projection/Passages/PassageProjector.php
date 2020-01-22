<?php


namespace App\ProophessorDo\Projection\Passages;


use App\Passages;
use App\ProophessorDo\Model\Passages\Event\PassageActivityUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageNotesUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageSubjectUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTestUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTextUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageTitleUpdated;
use App\ProophessorDo\Model\Passages\Event\PassageWasAdded;
use App\ProophessorDo\Model\Passages\Event\PassageWasDeleted;
use App\ProophessorDo\Model\Passages\Passage;
use App\ProophessorDo\Model\Passages\PassageNotes;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use function foo\func;
use Prooph\EventStore\Projection\ReadModelProjector;

class PassageProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    PassageWasAdded::class => function($state, PassageWasAdded $event) {
                    $readModel = $this->readModel();
                        $passage = new Passages();
                        $passage->id = $event->aggregateId();
                        $passage->reference_id = $event->referenceId()->toString();
                        $passage->text = $event->passageText()->toString();
                        $passage->title = $event->passageTitle()->toString();
                        $passage->testId = $event->testId()->toString();
                        $passage->passageSubjectId = $event->subjectId()->toString();
                        $passage->active = $event->passageActive()->toString();
                        $passage->notes = $event->passageNotes()->toString();
                        $readModel->stack(
                            'insert',
                            $passage
                        );
                    },
                    PassageTextUpdated::class => function($state, PassageTextUpdated $event) {
                        $readModel = $this->readModel();
                        Passages::flushCache();
                        $passage = Passages::find($event->passageId()->toString());
                        $passage->text = $event->text()->toString();

                        $readModel->stack(
                            'updateText',
                            $passage
                            );
                    },
                    PassageTitleUpdated::class => function($state, PassageTitleUpdated $event) {
                        $readModel = $this->readModel();
                        Passages::flushCache();
                        $passage = Passages::find($event->passageId()->toString());

                        $passage->title = $event->title()->toString();

                        $readModel->stack(
                            'updateTitle',
                            $passage
                        );
                    },
                    PassageTestUpdated::class => function($state, PassageTestUpdated $event) {
                        Passages::flushCache();
                        $passage = Passage::find($event->passageId()->toString());
                        $passage->testId = $event->testId()->toString();
                        $passage->save();
                    },
                    PassageSubjectUpdated::class => function($state, PassageSubjectUpdated $event) {
                        Passages::flushCache();
                        $passage = Passage::find($event->passageId()->toString());
                        $passage->passageSubjectId = $event->passageSubjectId()->toString();
                        $passage->save();
                    },
                    PassageActivityUpdated::class => function($state, PassageActivityUpdated $event) {
                        Passages::flushCache();
                        $passage = Passage::find($event->passageId()->toString());
                        $passage->active = $event->active()->toString();
                        $passage->save();
                    },
                    PassageNotesUpdated::class => function($state, PassageNotesUpdated $event) {
                        Passages::flushCache();
                        $passage = Passage::find($event->passageId()->toString());
                        $passage->active = $event->passageNotes()->toString();
                        $passage->save();
                    },
                    PassageWasDeleted::class => function($state, PassageNotesUpdated $event) {
                        Passages::flushCache();
                        Passage::destroy($event->passageId()->toString());
                    }
                ]
            );
        return $projector;
    }
}