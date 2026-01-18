<?php
// "serialize" this method is used to convert object into array 
// "__sleep" this method is used to convert only selected properties into array

class stud{
    public $lang = "php";
    private $first_name;
    private $last_name;
    private $conn;
    public function set($f,$l){
        $this->first_name=$f;
        $this->last_name=$l;
    }
    public function __construct(){
        $this->conn = mysqli_connect();
    }
    public function __sleep(){
        mysqli_close($this->conn);
        return array("first_name"); // this return only first_name property for convert obj into array
    }
    public function __wakeup(){
         $this->conn = mysqli_connect();
        echo "this is weakup method ";   
    }
  
}

$obj = new stud();
$obj->set("php codes","example");
 $srl= serialize($obj); // this convert obj into array
//  echo $srl."<br>";

 $us = unserialize($srl);
 print_r($us);

?> 