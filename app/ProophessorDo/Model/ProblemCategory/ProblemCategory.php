<?php
declare(strict_types=1);

namespace App\ProophessorDo\Model\ProblemCategory;


use App\ProophessorDo\Model\ProblemCategory\Event\ProblemCategoryWasCreated;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemCategory extends AggregateRoot
{

    use AggregateRootTrait;

    /**
     * @var ProblemCategoryId $problemCategoryId
     */
    protected $problemCategoryId;

    /**
     * @var CategoryId
     */
    protected $categoryId;

    /**
     * @var ProblemId
     */
    protected $problemId;

    public static function create(
        ProblemCategoryId $problemCategoryId,
        ProblemId $problemId,
        CategoryId $categoryId
    ) {
        $self = new self();
        $self->recordThat(
            ProblemCategoryWasCreated::withData(
                $problemCategoryId,
                $problemId,
                $categoryId
            )
        );
        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->problemCategoryId->toString();
    }

    public function whenProblemCategoryWasCreated(ProblemCategoryWasCreated $event) {
        $this->problemCategoryId = $event->problemCategoryId();
        $this->categoryId = $event->categoryId();
        $this->problemId = $event->problemId();
    }
}