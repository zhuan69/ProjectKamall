<?php


namespace App\Repositories;


use App\Models\User;
use UserInterface;

class UserRepository implements UserInterface
{

    /**
     * @inheritDoc
     */
    public function createUser(array $data): User
    {
        // TODO: Implement createUser() method.
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id): User
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function findByRoles(int $roleId): User
    {
        // TODO: Implement findByRoles() method.
    }

    /**
     * @inheritDoc
     */
    public function updateProfile(int $id): User
    {
        // TODO: Implement updateProfile() method.
    }
}
