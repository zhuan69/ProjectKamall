<?php


namespace App\Repositories;


use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use UserInterface;

class UserRepository implements UserInterface
{

    /**
     * @inheritDoc
     */
    public function createUser(array $data): User
    {
        return User::create($data);
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id)
    {
        try{
            return User::find($id)->first();
        }catch (ModelNotFoundException $exception){
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function findByRoles(int $roleId): User
    {
        try {
            return User::where('roles_id', $roleId)->first();
        }catch (ModelNotFoundException $exception){
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function updateProfile(int $id, array $data): bool
    {
        return User::find($id)->update($data);
    }
}
