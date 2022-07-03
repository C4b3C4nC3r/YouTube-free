<?php

    namespace App\Http;
    use Dotenv\Dotenv;
    use Error;

    
    require "../vendor/autoload.php";
    /**
     * 
     * THIS FILE RUN APP WITH FUNCTION RUN REQUERE AND AUTOLOAD INSTNCES :)
     * 
     */
    class Load{

        //public $config;
        protected $route;
        protected string $instancia;
        protected string $funcion;
        protected $value;   
        /**
         *
         * GESTIONARA LAS VISTAS, MODEL, CONTROL
         * CARGARA OTROS COMPONENETES DE LA APLICACION
         */
        function __construct() {
            
            $dotenv = Dotenv::createImmutable("../");
            $dotenv->load();
            define("CONFIG",require "../Config/App.php"); //anybody use
            $this->route = require "../Routes/web.php"; //used
        }

        public function runApp():bool
        {
            $control = null;
            $funcion = null;
            $value = null;
            ini_set("display_errors",1);
            ini_set("display_startup_errors",1);
            error_reporting(E_ALL);

            $uri = $_SERVER["REQUEST_URI"];

            $trim_uri = trim($uri,"/");
            $explode_uri = explode("/",empty($trim_uri)?"home":$trim_uri);
            
            if(array_key_exists($explode_uri[0],$this->route)){

                $type = gettype($this->route[$explode_uri[0]]);

                switch ($type) {
                    case 'string':
                        $this->instancia = $this->route[$explode_uri[0]];
                        $this->funcion = "index";
                        $this->value = false;
                        break;
                    
                    default:    
                        $this->instancia = isset($this->route[$explode_uri[0]][0])?$this->route[$explode_uri[0]][0]:"Error";
                        $this->funcion = isset($explode_uri[1])?$explode_uri[1]:"index";
                        $this->value = isset($explode_uri[2])?$explode_uri[2]:"no value";
                        break;
                }

                /**
                 * 
                 * Validate Functions and class...
                 * 
                 */
                $funcion = $this->funcion;
                $value = $this->value;
                $control = new $this->instancia();
                $control->$funcion($value);

            }


            return false;
        }
    }




