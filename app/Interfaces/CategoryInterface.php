<?php

use App\Models\Category;

interface CategoryInterface{
    /**
     * Get all category product
     *
     * @return Category
     */
    public function findAll(): Category;

    /**
     * Get category by id
     *
     * @param int $id
     * @return Category
     */
    public function findById(int $id): Category;

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
    public function updateCategory(int $id): Category;
}
