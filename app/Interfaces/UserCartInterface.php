<?php

use App\Models\UserCart;

interface UserCartInterface{
    /**
     * Get cart data by user id
     *
     * @param int $userId
     * @return UserCart
     */
    public function getCart(int $userId): UserCart;


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
     * @return UserCart
     */
    public function updateCart(int $id): UserCart;

    /**
     * Delete cart items lists by cart id
     *
     * @param int $id
     * @return UserCart
     */
    public function deleteItems(int $id): UserCart;
}
