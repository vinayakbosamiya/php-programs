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

    public function insert($table,$val=array()){
        if($this->tableExist($table)){
            print_r($val);
            // implode this function is convert a database's values into a string
            $table_cols = implode(', ',array_keys($val));
            $table_vals = implode("', '",array_values($val));

           $sql = "INSERT INTO $table($table_cols) VALUES ('$table_vals')";
           if($this->mysqli->query($sql)){
             array_push($this->res,$this->mysqli->insert_id); //insert_id this fetch id from the table
             return true;
            }else{
               array_push($this->res,$this->mysqli->error);
               return false;
            
           }
        }else{
            return false;
        }
    }
    public function update($table,$val=array(),$where=null){
        if($this->tableExist($table)){
           $args = array();
           foreach ($val as $key => $value) {
            $args[] = "$key = '$value'";
           }
        //    print_r($args);
        //    echo "<br>";
              $sql = "UPDATE $table SET " . implode(', ',$args);
              if($where != null){
                $sql .=" WHERE $where ";
              }
            //   echo $sql;
            if($this->mysqli->query($sql)){
                array_push($this->res,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->res,$this->mysqli->error);
            }

        }else{
            return false;
        }

    }
    public function select($table,$row="*",$join_table=null,$where=null,$order=null,$limit=null){

        if($this->tableExist($table)){
            $sql = "SELECT $row FROM $table";
            if($join_table !=null){
                $sql = $sql." JOIN $join_table";
            }
            if($where !=null){
                $sql = $sql." WHERE $where";
            }
            if($order !=null){
                $sql = $sql." ORDER BY $order";
            }
            if($limit !=null){
                $sql = $sql." LIMIT 0,$limit";
            }
            echo $sql;

            $query = $this->mysqli->query($sql);
        if($query){
            $this->res = $query->fetch_all(MYSQLI_ASSOC); // this method return associative array throw mysqli query
            return true;
        }
        else{
            array_push($this->res,$this->mysqli->error);
            return false;
        }
        }else{
            return false;
        }
    }

    public function selectSql($sql){
        
        $query = $this->mysqli->query($sql);
        if($query){
            $this->res = $query->fetch_all(MYSQLI_ASSOC); // this method return associative array throw mysqli query
            return true;
        }
        else{
            array_push($this->res,$this->mysqli->error);
            return false;
        }
        echo $query;
    }

    public function delete($table,$where=null){
        if($this->tableExist($table)){
            $sql = "DELETE FROM $table";
            if ($where != NULL){
                $sql = $sql ." WHERE $where";
            }
            if($this->mysqli->query($sql)){
                array_push($this->res,$this->mysqli->affected_rows);
                return true;
            }else{
                array_push($this->mysqli->error);
                return false;
            }
        }else{
            return false;
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