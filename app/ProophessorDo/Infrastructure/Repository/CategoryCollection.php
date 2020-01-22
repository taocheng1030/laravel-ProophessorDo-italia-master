<?php
declare(strict_types=1);

namespace App\ProophessorDo\Infrastructure\Repository;

use Prooph\EventSourcing\Aggregate\AggregateRepository;
use Prooph\ProophessorDo\Model\Category\Category;
use Prooph\ProophessorDo\Model\Category\CategoryId;
use Prooph\ProophessorDo\Model\Category\CategoryRepository;

class CategoryCollection extends AggregateRepository implements CategoryRepository
{

    public function add(Category $category)
    {
        $this->saveAggregateRoot($category);
    }

    public function get(CategoryId $categoryId)
    {
        $this->getAggregateRoot($categoryId->toString());
    }
}