<?php 

namespace App\Http\Controller;

class Controller {


    function view (string $view, $params = null){

        $file = "../Resources/View/".$this->replace($view).".php";
        $req = file_exists($file)?$file:null;

        /**
         *
         * Create Vars 
         * 
         * $key => nombre y ubcacion de la variable
         * $value => el contenido del $params
         * $params => array con nombre o key y valor
         */
        if($params !== null):
            foreach ($params as $key => $value):
                ${$key} = $value;
            endforeach;
        endif;
        
        require $req; 
    }

    protected function replace(string $param):string
    {
        return str_replace(".","/",$param);
    }
}

