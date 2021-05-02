<?php


namespace App\Repositories;


use App\Models\Product;
use CategoryInterface;
use Illuminate\Database\Eloquent\Collection;
use ProductInterface;

class ProductRepository implements ProductInterface
{
    private CategoryInterface $category;

    public function __construct(CategoryInterface $category)
    {
        $this->category = $category;
    }

    /**
     * @inheritDoc
     */
    public function findAll(): Collection
    {
        return Product::all();
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id): Product
    {
        return Product::find($id)->first();
    }

    /**
     * @inheritDoc
     */
    public function findByCategory(string $categoryName): Product
    {
        $category = $this->category->findCategoryByName($categoryName);
        return Product::where('categories_id', $category->id);
    }

    /**
     * @inheritDoc
     */
    public function createProduct(array $data): Product
    {
        return Product::create($data);
    }

    /**
     * @inheritDoc
     */
    public function editProduct(int $id): Product
    {
        return Product::find($id)->update();
    }

    /**
     * @inheritDoc
     */
    public function deleteProduct(int $id): Product
    {
        return Product::find($id)->delete();
    }
}
