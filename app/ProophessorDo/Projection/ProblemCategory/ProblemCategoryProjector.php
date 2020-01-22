<?php
declare(strict_types=1);

namespace App\ProophessorDo\Projection\ProblemCategory;


use App\ProblemCategory;
use App\ProophessorDo\Model\ProblemCategory\Event\ProblemCategoryWasCreated;
use Camuthig\EventStore\Package\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

class ProblemCategoryProjector implements ReadModelProjection
{

    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('event_stream')
            ->when(
                [
                    ProblemCategoryWasCreated::class => function($state, ProblemCategoryWasCreated $event) {
                        $readModel = $this->readModel();
                        ProblemCategory::flushCache();
                        $problemCategory = new ProblemCategory();
                        $problemCategory->id = $event->aggregateId();
                        $problemCategory->problem_id = $event->problemId()->toString();
                        $problemCategory->category_id = $event->categoryId()->toString();

                        $readModel->stack(
                            'insert',
                            $problemCategory
                        );
                    }
                ]
            );
        return $projector;
    }
}