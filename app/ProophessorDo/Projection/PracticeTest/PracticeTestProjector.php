<?php


namespace App\ProophessorDo\Projection\PracticeTest;


use App\ProophessorDo\Model\PracticeTest\Event\PracticeTestCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class PracticeTestProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when([
                PracticeTestCreated::class => function($state, PracticeTestCreated $event) {
                    $readModel = $this->readModel;
                    $readModel->stack(
                        'insert',
                        [
                            'id' => $event->practiceTestId()->toString(),
                            'name' => $event->name()->toString(),
                            'description' => $event->description()->toString(),
                            'form_code' => $event->formCode()->toString(),
                            'reference_id' => $event->referenceId(),
                            'test_id' => $event->testId(),
                            'createdBy' => $event->createdBy()
                        ]
                    );
                }
            ]);
        return $projector;
    }
}