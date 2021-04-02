<?php

use App\Models\Role;

interface RoleInterface{
    /**
     * Get list roles
     *
     * @return Role
     */
    public function findAll(): Role;

    /**
     * Get roles by id
     *
     * @param int $id
     * @return Role
     */
    public function findById(int $id): Role;


    /**
     * Get roles data by roles name
     *
     * @param string $roleName
     * @return Role
     */
    public function findByRoleName(string $roleName): Role;
}
