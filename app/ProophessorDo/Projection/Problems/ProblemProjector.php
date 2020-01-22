<?php
namespace Prooph\ProophessorDo\Projection\Problem;

use App\Problem;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Illuminate\Support\Facades\Log;
use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemActivityWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemDifficultyWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemFormatWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemNoteWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemReferenceNumberWasUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemTextUpdated;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasAdded;
use Prooph\ProophessorDo\Model\Problem\Event\ProblemWasDeleted;

class ProblemProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    ProblemWasAdded::class => function ($state, ProblemWasAdded $event) {
                    $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $problem = new Problem();
                        $problem->id = $event->aggregateId();
                        $problem->text = $event->text()->toString();
                        $problem->reference_number = $event->referenceNumber()->toString();
                        $problem->subject_id = $event->subjectId()->toString();
                        $problem->format = $event->format()->toString();
                        $problem->difficulty = $event->difficulty()->toString();
                        $problem->created_by = 1;
                        $problem->section_id = $event->sectionId()->toString();
                        $problem->notes = $event->notes()->toString();
                        $problem->active = (Int) $event->active()->toString();
                        $readModel->stack(
                            'insert',
                            $problem
                        );
                    },
                    ProblemReferenceNumberWasUpdated::class => function($state, ProblemReferenceNumberWasUpdated $event) {
                        $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $readModel->stack(
                            'updateReferenceNumber',
                            [
                                'id' => $event->aggregateId(),
                                'reference_number' => $event->referenceNumber()->toString()
                            ]
                        );
                    },
                    ProblemActivityWasUpdated::class => function($state, ProblemActivityWasUpdated $event) {
                        $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $readModel->stack(
                            'updateActivity',
                            [
                                'id' => $event->problemId()->toString(),
                                'active' => $event->active()->toString()
                            ]
                        );
                    },
                    ProblemDifficultyWasUpdated::class => function($state, ProblemDifficultyWasUpdated $event) {
                        $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $readModel->stack(
                            'updateDifficulty',
                            [
                                'id' => $event->problemId()->toString(),
                                'difficulty' => $event->difficulty()->toString()
                            ]
                        );
                    },
                    ProblemFormatWasUpdated::class => function($state, ProblemFormatWasUpdated $event) {
                        $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $readModel->stack(
                            'updateFormat',
                            [
                                'id' => $event->aggregateId(),
                                'format' => $event->format()->toString()
                            ]
                        );
                    },
                    ProblemNoteWasUpdated::class => function($state, ProblemNoteWasUpdated $event)
                    {

                        $readModel = $this->readModel();
                        Problem::flushCache('repository_cache');
                        $readModel->stack(
                            'updateNote',
                            [
                                'id' => $event->aggregateId(),
                                'note' => $event->note()->toString()
                            ]
                        );
                    },
                    ProblemTextUpdated::class => function($state, ProblemTextUpdated $event)
                    {
                        $readModel = $this->readModel();
                        Problem::flushCache();
                        $readModel->stack(
                            'updateText',
                            [
                                'id' => $event->problemId()->toString(),
                                'text' => $event->text()->toString()
                            ]
                        );
                    },
                    ProblemWasDeleted::class => function($state, ProblemWasDeleted $event) {
                        Problem::flushCache();
                        Problem::where('id' ,$event->problemId()->toString())->delete();
                    }
                ]
            );
        return $projector;
    }
}