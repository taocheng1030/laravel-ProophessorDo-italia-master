<?php


namespace App\ProophessorDo\Model\ProblemCategory\Event;


use App\ProophessorDo\Model\ProblemCategory\ProblemCategoryId;
use Prooph\EventSourcing\AggregateChanged;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Problem\ProblemId;

class ProblemCategoryWasCreated extends AggregateChanged
{

    /**
     * @var ProblemCategoryId
     */
    protected $problemCategoryId;

    /**
     * @var ProblemId
     */
    protected $problemId;

    /**
     * @var CategoryId
     */
    protected $categoryId;

    public static function withData(
        ProblemCategoryId $problemCategoryId,
        ProblemId $problemId,
        CategoryId $categoryId
    ) {
        /**
         * @var ProblemCategoryWasCreated $event
         */
        $event = self::occur(
            $problemCategoryId->toString(),
            [
                'problemId' => $problemId->toString(),
                'categoryId' => $categoryId->toString()
            ]
        );

        $event->problemCategoryId = $problemCategoryId;
        $event->problemId = $problemId;
        $event->categoryId = $categoryId;

        return $event;
    }

    public function problemCategoryId()
    {
        if (!$this->problemCategoryId) {
            $this->problemCategoryId = ProblemCategoryId::fromString($this->aggregateId());
        }
        return $this->problemCategoryId;
    }

    public function problemId()
    {
        if (!$this->problemId) {
            $this->problemId = ProblemId::fromString($this->payload['problemId']);
        }
        return $this->problemId;
    }

    public function categoryId()
    {
        if (!$this->categoryId) {
            $this->categoryId = CategoryId::fromString($this->payload['categoryId']);
        }
        return $this->categoryId;
    }
}