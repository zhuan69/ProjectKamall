<?php

use App\Models\UserCart;
use Illuminate\Database\Eloquent\Collection;

interface UserCartInterface{
    /**
     * Get cart data by user id
     *
     * @param int $userId
     * @return UserCart | Collection | null
     */
    public function getCart(int $userId): Collection;


    /**
     * Create new cart
     *
     * @param array $data
     * @return UserCart
     */
    public function createCart(array $data): UserCart;

    /**
     * Update cart data using cart id
     *
     * @param int $id
     * @return bool
     */
    public function updateCart(int $id, array $data): bool;

    /**
     * Delete cart items lists by cart id
     *
     * @param int $id
     * @return bool
     */
    public function deleteItems(int $id): bool;
}
