<?php


namespace App\Repositories;


use App\Models\Role;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use RoleInterface;

class RoleRepository implements RoleInterface
{

    /**
     * @inheritDoc
     */
    public function findAll(): Collection
    {
        return Role::all();
    }

    /**
     * @inheritDoc
     */
    public function findById(int $id)
    {
        try {
            return Role::find($id)->first();
        }catch (ModelNotFoundException $exception){
            return $exception->getMessage();
        }
    }

    /**
     * @inheritDoc
     */
    public function findByRoleName(string $roleName)
    {
        try {
            return Role::where('name', $roleName)->first();
        }catch (ModelNotFoundException $exception){
            return $exception->getMessage();
        }
    }
}
