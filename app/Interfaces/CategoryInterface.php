<?php

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryInterface{
    /**
     * Get all category product
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Get category by id
     *
     * @param int $id
     * @return Category | null
     */
    public function findById(int $id);

    /**
     * Get category data by category name
     *
     * @param string $categoryName
     * @return Category
     */
    public function findCategoryByName(string $categoryName): Category;

    /**
     * Create a new Category Product
     *
     * @param array $data
     * @return Category
     */
    public function createCategory(array $data): Category;

    /**
     * Update information category
     *
     * @param int $id
     * @return Category
     */
    public function updateCategory(int $id, array $data): bool;
}
