<?php
declare(strict_types=1);
namespace App\ProophessorDo\Projection\Category;

use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\ProophessorDo\Model\Category\Event\CategoryWasCreated;

class CategoryProjector implements ReadModelProjection
{

    public function project(\Prooph\EventStore\Projection\ReadModelProjector $projector): \Prooph\EventStore\Projection\ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    CategoryWasCreated::class => function($state, CategoryWasCreated $event) {
                        $readModel = $this->readModel();
                        $readModel->stack(
                            'insert',
                            [
                                'id' => $event->aggregateId(),
                                'name' => $event->name()->toString(),
                                'subject_id' => $event->subjectId()->toString()
                            ]
                        );
                    }
                ]
            );
        return $projector;
    }
}