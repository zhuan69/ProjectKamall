<?php


namespace App\Repositories;


use App\Models\UserCart;
use UserCartInterface;

class UserCartRepository implements UserCartInterface
{

    /**
     * @inheritDoc
     */
    public function getCart(int $userId): UserCart
    {
        // TODO: Implement getCart() method.
    }

    /**
     * @inheritDoc
     */
    public function createCart(array $data): UserCart
    {
        // TODO: Implement createCart() method.
    }

    /**
     * @inheritDoc
     */
    public function updateCart(int $id): UserCart
    {
        // TODO: Implement updateCart() method.
    }

    /**
     * @inheritDoc
     */
    public function deleteItems(int $id): UserCart
    {
        // TODO: Implement deleteItems() method.
    }
}
