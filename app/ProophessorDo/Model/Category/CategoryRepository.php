<?php


namespace Prooph\ProophessorDo\Model\Category;


interface CategoryRepository
{
    public function add(Category $category);
    public function get(CategoryId $categoryId);
}