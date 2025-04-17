<?php
// AuthorityService.php

// SERVER and MYSQL Communication for User Authority Related data.

namespace App\Services;

use App\Models\RoleModel;

define('ROLES', ['USER', 'ADMIN']);

class AuthorityService
{
    protected $roleModel;

    public function __construct()
    {
        $this->roleModel = new RoleModel();
    }

    // @brief Get User's Authority, return the string of its name 
    // @param id: The User Identifier.
    // @returntype string
    // @return string
    public function getRoleById(int $id): ?array
    {
        return $this->roleModel->find($id);
    }

    // @brief Returns the first row of found User's Authority by its name, return a boolean that indicates success or not. 
    // @param name: The Username.
    // @returntype BaseBuilder
    // @return BaseBuilder Instance (Method Chaining)
    public function getRoleByName(string $name): ?array
    {
        return $this->roleModel->where('name', $name)->first();
    }

    // @brief Creates a new role in the database. Returning a boolean sucess indicator 
    // @param name: The Username.
    // @return boolean
    public function createRole(string $name): int
    {
        return $this->roleModel->insert(['name' => $name]);
    }

    // @brief Deletea role in the database. Returning a boolean sucess indicator or a BaseBuilder 
    // @param id: The User Identifier.
    // @returntype BaseBuilder | boolean
    // @return BaseBuilder | false
    public function deleteRole(int $id): bool
    {
        return $this->roleModel->delete($id);
    }
}
