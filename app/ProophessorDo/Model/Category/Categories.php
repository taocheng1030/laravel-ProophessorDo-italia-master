<?php
declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Category;

class Categories
{

    /**
     * @var array
     */
    private $categories;

    public static function fromArray($categories = [])
    {
        return new self($categories);
    }

    private function __construct(array $categories)
    {
        $this->categories = $categories;
    }

    public function addCategory(CategoryId $categoryId)
    {
        $this->categories[] = $categoryId->toString();
        return $this;
    }

    public function toArray()
    {
        return $this->categories;
    }

    public function toString()
    {
        return json_encode($this->categories);
    }


}