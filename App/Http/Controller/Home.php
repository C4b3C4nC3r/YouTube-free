<?php

namespace App\Http\Controller;

class Home extends Controller{


    public function index(){
        //$mod = new ModelsHome();
        //$home = $mod->select();        
        $home = "Hello World!!<br>Welcome to a new World of Dev";
        $this->view("Home.index",compact("home"));

    }

}

