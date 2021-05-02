<?php

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

interface UserInterface{
    /**
     * Create a new user
     *
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User;

    /**
     * Get detail user by id
     *
     * @param int $id
     * @return User | ModelNotFoundException
     */
    public function findById(int $id);

    /**
     * Get detail user by roles
     *
     * @param int $roleId
     * @return User | ModelNotFoundException
     */
    public function findByRoles(int $roleId);

    /**
     * Update information user
     *
     * @param int $id
     * @return bool
     */
    public function updateProfile(int $id, array $data): bool;
}
