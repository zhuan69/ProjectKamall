<?php


namespace App\Repositories;


use App\Models\UserCart;
use Illuminate\Database\Eloquent\Collection;
use UserCartInterface;

class UserCartRepository implements UserCartInterface
{

    /**
     * @inheritDoc
     */
    public function getCart(int $userId): Collection
    {
        return UserCart::where('users_id', $userId)->get();

    }

    /**
     * @inheritDoc
     */
    public function createCart(array $data): UserCart
    {
        return UserCart::create($data);
    }

    /**
     * @inheritDoc
     */
    public function updateCart(int $id, array $data): bool
    {
        return UserCart::find($id)->update($data);
    }

    /**
     * @inheritDoc
     */
    public function deleteItems(int $id): bool
    {
        return UserCart::find($id)->delete();
    }
}
