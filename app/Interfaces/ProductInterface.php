<?php

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductInterface{
    /**
     * Get all Product with Paginate
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Get detail product
     *
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product;

    /**
     * Get Product list based on category with Paginate
     *
     * @param string $categoryName
     * @return Product
     */
    public function findByCategory(string $categoryName): Product;

    /**
     * Create a new Product
     *
     * @param array $data
     * @return Product
     */
    public function createProduct(array $data): Product;

    /**
     * Edit an existing product
     *
     * @param int $id
     * @return Product
     */
    public function editProduct(int $id): Product;

    /**
     * Delete existing product
     *
     * @param int $id
     * @return Product
     */
    public function deleteProduct(int $id): Product;
}
