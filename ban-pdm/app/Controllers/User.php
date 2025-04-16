<?php
// User.php

namespace App\Controllers;

use App\Services\UserService;

class User extends BaseController
{
    protected $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        return $this->response->setJSON($users);
    }

    public function show($id)
    {
        $user = $this->userService->getUserById($id);
        if (!$user) {
            return $this->response->setStatusCode(404)->setJSON(['message' => 'User not found']);
        }

        return $this->response->setJSON($user);
    }
}
