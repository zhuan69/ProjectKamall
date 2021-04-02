<?php


namespace App\Repositories;


use App\Models\Role;
use RoleInterface;

class RoleRepository implements RoleInterface
{

    /**
     * @inheritDoc
     */
    public function findAll(): Role
    {
        // TODO: Implement findAll() method.
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id): Role
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function findByRoleName(string $roleName): Role
    {
        // TODO: Implement findByRoleName() method.
    }
}
