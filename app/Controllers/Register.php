<?php

    namespace App\Controllers;

    class Register extends BaseController 
    {

        public function index() {
            return view("register");
        }

        public function userRegistration(){

            $gmail = $this->request->getPost("gmail");
            $password = $this->request->getPost("password");

            return view("RegisterResult", [
                "gmail" => $gmail,
                "password" => $password
            ]);
        }
    }