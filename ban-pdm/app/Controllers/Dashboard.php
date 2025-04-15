<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        // TODO: differentiate between Admin and Non Admin
        //       using session cookies
        return view('public_dashboard');
    }
    // function view(string $page = 'home') : string {
        
    // }
}