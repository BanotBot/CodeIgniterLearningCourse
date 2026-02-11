<?php

    namespace App\Controllers;

    use App\Controllers\BaseController;
    use App\Models\Users;

    class Register extends BaseController 
    {

        public function index() {
            return view("register");
        }

        public function userRegistration(){

            $gmail = $this->request->getPost("gmail");
            $password = $this->request->getPost("password");

            $usersInstance = new Users();

            $data = [
                "gmail" => $gmail,
                "password" => $password
            ];

            $usersInstance->insert($data);

            return redirect()->to(site_url("Login/index"))
                ->with("success", "User successfully created!");


            // return view("RegisterResult", [
            //     "gmail" => $gmail,
            //     "password" => $password
            // ]);
        }


    }