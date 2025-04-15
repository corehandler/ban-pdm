<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index(): string
    {
        // TODO: differentiate between Admin and Non Admin
        //       using session cookies (ci 4 already)
        return view('public_dashboard');
    }
}