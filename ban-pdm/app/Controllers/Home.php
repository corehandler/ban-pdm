<?php

namespace App\Controllers;

class Home extends BaseController
{
    // Immediately redirects to /dashboard
    public function index(): string
    {
        return view('welcome_message');
    }
}
