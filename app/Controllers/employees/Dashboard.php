<?php

    namespace App\Controllers\employees;
    
    use App\Controllers\BaseController;

    class Dashboard extends BaseController
    {

        public function index() 
        {
            return view("employees/dashboard");
        }
        
    }