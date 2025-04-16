<?php
// UserService.php

// SERVER and MYSQL Communication for User Credentials Related data.

namespace App\Services;

use App\Models\UserModel;

use App\Services\AuthorityService;

class UserService
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    // @brief Returns credentials with the exact User Identifier (ID) 
    // @param id: The User Identifier.
    // @returntype BaseBuilder | boolean
    // @return BaseBuilder | false
    public function getUserById(int $id): ?array
    {
        return $this->userModel->find($id);
    }

    // @brief Returns the first row of found credentials with the exact Email address. 
    // @param email: The User Email address.
    // @returntype BaseBuilder | boolean
    // @return BaseBuilder | false
    public function getUserByEmail(string $email): ?array
    {
        return $this->userModel->where('email', $email)->first();
    }

    // @brief Creates a new User. Returning its Identifier. 
    // @param userData: The User data.
    // @returntype number
    // @return number
    public function createUser(array $userData): int
    {
        return $this->userModel->insert($userData); // returns insert ID
    }

    // @brief Updates the user credentials/data. 
    // @param id: The User identifier.
    // @returntype null
    // @return null
    public function updateUser(int $id, array $userData): bool
    {
        return $this->userModel->update($id, $userData);
    }

    // @brief Deletes the user data. 
    // @param id: The User identifier.
    // @returntype null
    // @return null
    public function deleteUser(int $id): bool
    {
        return $this->userModel->delete($id);
    }
}