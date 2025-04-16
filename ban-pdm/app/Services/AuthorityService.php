<?php
// AuthorityService.php

namespace App\Services;

use App\Models\RoleModel;

class AuthorityService
{
    protected $roleModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
    }

    public function getRoleById(int $id): ?array
    {
        return $this->roleModel->find($id);
    }

    public function getRoleByName(string $name): ?array
    {
        return $this->roleModel->where('name', $name)->first();
    }

    public function createRole(string $name): int
    {
        return $this->roleModel->insert(['name' => $name]);
    }

    public function deleteRole(int $id): bool
    {
        return $this->roleModel->delete($id);
    }
}
