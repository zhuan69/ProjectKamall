<?php

use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface RoleInterface{
    /**
     * Get list roles
     *
     * @return Collection
     */
    public function findAll(): Collection;

    /**
     * Get roles by id
     *
     * @param int $id
     * @return Role | ModelNotFoundException
     */
    public function findById(int $id);


    /**
     * Get roles data by roles name
     *
     * @param string $roleName
     * @return Role | ModelNotFoundException
     */
    public function findByRoleName(string $roleName);
}
