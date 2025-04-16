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

    public function getUserById(int $id): ?array
    {
        return $this->userModel->find($id);
    }

    public function getUserByEmail(string $email): ?array
    {
        return $this->userModel->where('email', $email)->first();
    }

    public function createUser(array $userData): int
    {
        return $this->userModel->insert($userData); // returns insert ID
    }

    public function updateUser(int $id, array $userData): bool
    {
        return $this->userModel->update($id, $userData);
    }

    public function deleteUser(int $id): bool
    {
        return $this->userModel->delete($id);
    }
}