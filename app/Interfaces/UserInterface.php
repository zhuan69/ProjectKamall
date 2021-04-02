<?php

use App\Models\User;

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
     * @return User
     */
    public function findById(int $id): User;

    /**
     * Get detail user by roles
     *
     * @param int $roleId
     * @return User
     */
    public function findByRoles(int $roleId): User;

    /**
     * Update information user
     *
     * @param int $id
     * @return User
     */
    public function updateProfile(int $id): User;
}
