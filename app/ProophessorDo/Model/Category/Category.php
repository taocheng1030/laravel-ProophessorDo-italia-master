<?php


namespace Prooph\ProophessorDo\Model\Category;

use Prooph\EventSourcing\AggregateRoot;
use Prooph\ProophessorDo\Model\AggregateRootTrait;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\Event\CategoryWasCreated;
use Ramsey\Uuid\UuidInterface;

class Category extends AggregateRoot
{
    use AggregateRootTrait;
    /**
     * @var CategoryId
     */
    protected $categoryId;

    /**
     * @var UuidInterface
     */
    protected $uuid;

    /**
     * @var CategoryName
     */
    protected $name;

    /**
     * @var SubjectId
     */
    protected $subjectId;

    /**
     * @var CategoryId
     */
    protected $parentId;

    public static function create(
        CategoryId $categoryId,
        CategoryName $categoryName,
        SubjectId $subjectId
    ) {

        $self = new self();
        $self->recordThat(
            CategoryWasCreated::withData(
                $categoryId,
                $categoryName,
                $subjectId
            )
        );

        return $self;
    }

    protected function aggregateId(): string
    {
        return $this->categoryId->toString();
    }

    public function whenCategoryWasCreated(CategoryWasCreated $event) {
        $this->uuid = $event->uuid();
        $this->categoryId = $event->categoryId();
        $this->name = $event->name();
        $this->subjectId = $event->subjectId();
    }
}