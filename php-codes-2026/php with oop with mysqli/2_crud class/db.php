<?php
class database{
    private $host = "localhost";
    private $username = "root";
    private $psw = "";
    private $db = "sc";

    private $conn = false;
    private $mysqli;
    private $res = array();
    function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->host,$this->username,$this->psw,$this->db);

            if($this->mysqli->connect_error){
                // die("Connection failed: ".$this->mysqli->connect_error);
                array_push($this->res,$this->mysqli->connect_error);
                return false;

            }else{
                // $this->conn = true;
                return true;
            }
        }
    }
    public function __destruct(){
        if($this->conn){
            if($this->mysqli->close()){
                $this->conn = false;
                return true;
            }
        }else{
            return false;
        }

    }
}

?>