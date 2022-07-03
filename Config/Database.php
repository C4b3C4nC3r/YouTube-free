<?php
namespace Config;


trait Database{

    protected $conn;
    protected string $nameClass;
    protected string $sql = "SELECT * FROM "; 

    public function __construct() {
        
        $conn = new Connection();
        $this->conn = $conn->mysqlConn();
        $this->nameClass = strtolower(basename(str_replace("\\","/",get_called_class())));
    }
    /*
    * @param string entity THe sentence to consult on Database and return object (Instance of Model Use);    
    *Test para confirmar si obtiee la entidad model    
    *echo "Entity: " . $this->nameClass."<br>";
    *
    */

    public function select()
    {
        $sentence = $this->sql . $this->nameClass;
        return $this->conn->query($sentence);
        
    }
        
    
}