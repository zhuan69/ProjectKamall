<?php


namespace App\Repositories;


use App\Models\Category;

use CategoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryInterface
{
    /**
     * @inheritDoc
     */
    public function findAll(): Collection
    {
        return Category::all();
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id)
    {
        return Category::find($id)->first();
    }

    /**
     * @inheritDoc
     */
    public function findCategoryByName(string $categoryName): Category
    {
        return Category::where('name', $categoryName)->first();
    }

    /**
     * @inheritDoc
     */
    public function createCategory(array $data): Category
    {
        return Category::create($data);
    }

    /**
     * @inheritDoc
     */
    public function updateCategory(int $id, array $data): bool
    {
        return Category::find($id)->update($data);
    }
}
