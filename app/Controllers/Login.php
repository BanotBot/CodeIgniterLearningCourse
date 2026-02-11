<?php 

    namespace App\Controllers;

    class Login extends BaseController
    {

        public function auth() {

            $gmail = $this->request->getPost("gmail");
            $password = $this->request->getPost("password");

            return view("LoginResult",[
                "gmail" => $gmail, 
                "password" => $password
            ]);
        }

        
    }


    