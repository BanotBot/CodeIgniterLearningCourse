<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class Users extends Model 
    {
        protected $table = "users";
        protected $leaveTable = "employees_leaves";
        protected $primaryKey = "userId";

        protected $allowedFields = [
            "gmail",
            "password"
        ];


    }