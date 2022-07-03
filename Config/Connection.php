<?php


namespace Config;

use mysqli;
use PDO;
use PDOException;

class Connection{

    public function __construct() {
        
    }

    public function mysqlConn()
    {

        $mysqli = new mysqli(CONFIG["DATABASE_HOST"],CONFIG["DATABASE_USER"],CONFIG["DATABASE_PASSWORD"],CONFIG["DATABASE_NAME"]);
        /* comprobar la conexión */
        if ($mysqli->connect_errno) {
            printf("Falló la conexión: %s\n", $mysqli->connect_error);
            exit();
        }
        return $mysqli;
    }


    public function pdoConn()
    {
        
        try {

            $connection = "mysql:host=" . CONFIG["DATABASE_HOST"] . ";dbname=" . CONFIG["DATABASE_NAME"] . ";charset=" . CONFIG["DATABASE_CHARSET"];
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, CONFIG["DATABASE_USER"], CONFIG["DATABASE_PASSWORD"], $options);

            return $pdo;
        } catch (PDOException $e) {

            print_r('Error connection: ' . $e->getMessage());
        
        }
    
    }

    public function nosqlConn()
    {

        

    }
}