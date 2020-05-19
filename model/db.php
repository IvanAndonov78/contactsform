<?php

class Db {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "cw";
    public $conn; 

    function __construct() {
        $this->conn = null;
		
        try{
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            $conn = null;
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
?>