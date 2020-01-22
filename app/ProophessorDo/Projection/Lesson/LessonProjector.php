<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\Lesson;


use App\Lesson;
use App\ProophessorDo\Model\Lesson\Command\UpdateLessonDescription;
use App\ProophessorDo\Model\Lesson\Event\LessonDescriptionUpdated;
use App\ProophessorDo\Model\Lesson\Event\LessonReferenceIdWasUpdated;
use App\ProophessorDo\Model\Lesson\Event\UpdateLessonReferenceId;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;
use Prooph\ProophessorDo\Model\Lesson\Event\LessonWasCreated;

class LessonProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                LessonWasCreated::class => function($state, LessonWasCreated $event) {
                    $lesson = new Lesson();
                    $lesson->id = $event->aggregateId();
                    $lesson->reference_id = $event->referenceId()->toString();
                    $lesson->type = $event->lessonTypeId()->toString();
                    $lesson->sequence = $event->sequence()->toString();
                    $lesson->subject_id = $event->subjectId()->toString();
                    $lesson->unit_id = $event->unitId()->toString();
                    $lesson->name = $event->name()->toString();
                    $lesson->multi_line_title = $event->multiLineTitle()->toString();
                    $lesson->description = $event->description()->toString();
                    $lesson->starting_page = $event->startingPage()->toString();
                    $lesson->ending_page = $event->endingPage()->toString();
                    $lesson->challenge_page = $event->challengePage()->toString();
                    $lesson->practice_page = $event->practicePage()->toString();
                    $lesson->drill_page = $event->drillPage()->toString();
                    $lesson->created_by = $event->createdBy()->toString();
                    $lesson->status = $event->status()->toString();
                    $lesson->save();
                },
                LessonReferenceIdWasUpdated::class => function($state, LessonReferenceIdWasUpdated $event) {
                    $lesson = Lesson::find($event->lessonId()->toString());
                    $lesson->reference_id = $event->lessonReferenceId()->toString();
                    $lesson->save();
                },
                LessonDescriptionUpdated::class => function($state, LessonDescriptionUpdated $event) {
                    $lesson = Lesson::find($event->lessonId()->toString());
                    $lesson->description = $event->description()->toString();
                    $lesson->save();
                }
            ]);
        return $projector;
    }
}