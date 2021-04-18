<?php


namespace App\Repositories;


use App\Models\SubCategory;
use SubCategoryInterface;

class SubCategoryRepository implements SubCategoryInterface
{
    public function findByMainCategory(int $category)
    {
        return SubCategory::where('categories_id', $category)->get();
    }

    public function createSubCategory(array $data)
    {
        return SubCategory::create($data);
    }

    public function updateSubCategory(int $id, array $data): bool
    {
        return SubCategory::find($id)->update($data);
    }

    public function deleteSubCategory(int $id): bool
    {
        return SubCategory::find($id)->delete();
    }

    public function findById(int $id)
    {
        return SubCategory::find($id);
    }

    public function findBySubName(string $subName)
    {
        return SubCategory::where('sub_name')->first();
    }
}
