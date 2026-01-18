<?php
class stud{
    public $lang = "php";
    private $first_name;
    private $last_name;
    public function set($f,$l){
        $this->first_name=$f;
        $this->last_name=$l;
    }

    public function __unset($property){
        unset($this->$property);
    }
}

$obj = new stud();
$obj->set("php codes","example");
unset($obj->first_name); 
print_r($obj);
 

?>