<?php

interface SubCategoryInterface{
    public function findByMainCategory(int $category);

    public function createSubCategory(array $data);

    public function updateSubCategory(int $id, array $data): bool;

    public function deleteSubCategory(int $id):bool;

    public function findById(int $id);

    public function findBySubName(string $subName);
}
