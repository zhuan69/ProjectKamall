<?php


namespace App\Repositories;


use App\Models\Product;
use ProductInterface;

class ProductRepository implements ProductInterface
{

    /**
     * @inheritDoc
     */
    public function findAll(): Product
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id): Product
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function findByCategory(int $categoryId): Product
    {
        // TODO: Implement findByCategory() method.
    }

    /**
     * @inheritDoc
     */
    public function createProduct(array $data): Product
    {
        // TODO: Implement createProduct() method.
    }

    /**
     * @inheritDoc
     */
    public function editProduct(int $id): Product
    {
        // TODO: Implement editProduct() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteProduct(int $id): Product
    {
        // TODO: Implement deleteProduct() method.
    }
}
