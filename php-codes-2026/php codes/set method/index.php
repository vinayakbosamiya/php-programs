<?php
class stud{
    private $name;
    public function userprint(){
        echo $this->name;
    }
    // this get method run when access private method outside of class 
    public function __get($property){
        echo "this property($property) is private or non existing come from __get!";
    }
    // this "set" method run when set a value of private property outside of class  
    public function __set($property,$val){
        if(property_exists($this,$property)){
            $this->$property=$val;
        }else{
           echo "property is not available!";
        }
    }
}

$obj = new stud();
$obj->hh = "php";
$obj->userprint();

?>