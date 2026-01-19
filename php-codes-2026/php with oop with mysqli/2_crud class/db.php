<?php
class database{
    private $host = "localhost";
    private $username = "root";
    private $psw = "";
    private $db_name = "sc";

    private $conn = false;
    private $mysqli;
    private $res = array();
    function __construct(){
        if(!$this->conn){
            $this->mysqli = new mysqli($this->host,$this->username,$this->psw,$this->db_name);
            $this->conn = true;
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

    public function insert($table,$val=array()){
        if($this->tableExist($table)){
            print_r($val);
            // implode this function is convert a database's values into a string
            $table_cols = implode(', ',array_keys($val));
            $table_vals = implode("', '",array_values($val));

           $sql = "INSERT INTO $table($table_cols) VALUES ('$table_vals')";
           if($this->mysqli->query($sql)){
             array_push($this->res,$this->mysqli->insert_id);
             return true;
            }else{
               array_push($this->res,$this->mysqli->error);
               return false;
            
           }
        }else{
            return false;
        }
    }
    public function select(){

    }

    public function update(){

    }
    public function delete(){

    }

    private function tableExist($t){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$t'";
        $tableindb = $this->mysqli->query($sql);
        if($tableindb){
            if($tableindb->num_rows ==1){
                return true;
            }
            else{
                array_push($this->res,$t."does not exist");
                return false;
            }
        }
    }

    public function getRes(){
        $value = $this->res;
        $this->res = array();
        return $value;
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
