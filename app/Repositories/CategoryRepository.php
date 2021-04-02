<?php


namespace App\Repositories;


use App\Models\Category;
use CategoryInterface;

class CategoryRepository implements CategoryInterface
{

    /**
     * @inheritDoc
     */
    public function findAll(): Category
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id): Category
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function findCategoryByName(string $categoryName): Category
    {
        // TODO: Implement findCategoryByName() method.
    }

    /**
     * @inheritDoc
     */
    public function createCategory(array $data): Category
    {
        // TODO: Implement createCategory() method.
    }

    /**
     * @inheritDoc
     */
    public function updateCategory(int $id): Category
    {
        // TODO: Implement updateCategory() method.
    }
}
