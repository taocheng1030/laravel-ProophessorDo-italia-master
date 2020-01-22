<?php


namespace Prooph\ProophessorDo\Model\Category\Event;

use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Subject\SubjectId;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryName;

class CategoryWasCreated extends AggregateChanged
{

    /**
     * @var CategoryId
     */
    protected $categoryId;

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

    public static function withData(
        CategoryId $categoryId,
        CategoryName $categoryName,
        SubjectId $subjectId
    ) {

        $event = self::occur(
            $categoryId->toString(),
            [
                'name' => $categoryName->toString(),
                'subject_id' => $subjectId->toString()
            ]
        );
        $event->categoryId = $categoryId;
        $event->name = $categoryName;
        $event->subjectId = $subjectId;
        return $event;
    }

    public function categoryId()
    {
        if (!$this->categoryId) {
            $this->categoryId = CategoryId::fromString($this->aggregateId());
        }
        return $this->categoryId;
    }

    public function name()
    {
        if (!$this->name) {
            $this->name =  CategoryName::fromString($this->payload['name']);
        }
        return $this->name;
    }

    public function subjectId()
    {
        if (!$this->subjectId) {
            $this->subjectId = SubjectId::fromString($this->payload['subject_id']);
        }
        return $this->subjectId;
    }
}