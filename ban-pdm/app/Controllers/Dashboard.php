<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    function view(string $page = 'home') : string {
        
    }
}
