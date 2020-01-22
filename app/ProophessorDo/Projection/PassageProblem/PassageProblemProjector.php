<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\PassageProblem;

use App\PassageProblems;
use App\ProophessorDo\Model\PassageProblem\Command\ChangePassageProblemSequence;
use App\ProophessorDo\Model\PassageProblem\Event\ProblemAddedToPassage;
use App\ProophessorDo\Model\PassageProblem\PassageProblem;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class PassageProblemProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                ProblemAddedToPassage::class => function($state, ProblemAddedToPassage $event) {
                    PassageProblems::flushCache();
                    $passageProblems = new PassageProblems();
                    $passageProblems->id = $event->passageProblemId()->toString();
                    $passageProblems->passage_id = $event->passageId()->toString();
                    $passageProblems->problem_id = $event->problemId()->toString();
                    $passageProblems->sequence = (int)$event->sequence()->toString();
                    $passageProblems->save();
                },
                ChangePassageProblemSequence::class => function($state, ChangePassageProblemSequence $event) {
                    PassageProblems::flushCache();
                    $passageProblem = PassageProblems::find($event->passageProblemId()->toString());
                    $passageProblem->sequence = $event->sequence()->toString();
                    $passageProblem->save();
                }
            ]);
        return $projector;
    }
}