<?php

namespace App\Http\Controller;

class Login extends Controller{


    public function index(){
        $this->view("Login.index");
    }

    public function login()
    {
        if(isset($_POST)):
            $home = var_dump($_POST);
            echo $home;
            
        endif;
    }
}

