<?php 

    namespace App\Controllers;

    use App\Models\Users;

    class Login extends BaseController
    {

        public function index() {
            return view("Login");
        }

        public function auth() {

            $gmail = $this->request->getPost("gmail");
            $password = $this->request->getPost("password");

            $usersInstance = new Users();

            $data = [
                "gmail" => $gmail,
                "password" => $password
            ];

            $usersInstance->select($data);

            return redirect()->to(site_url("dashboard/employee"))
                ->with("success", ["message" => "login success"]);

            // return view("LoginResult",[
            //     "gmail" => $gmail, 
            //     "password" => $password
            // ]);
        }

        
    }


    