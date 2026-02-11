<?php

namespace App\Controllers;

class Home extends BaseController
{

    // index or the landing page format
    public function index(): string
    {
        return view('Login');
    }

    
}
