<?php
class stud{
    private $name;
    public function __get($property){
        echo "this property($property) is private or non existing come from __get!";
    }
    public function __set($property,$val){
        echo "this property($property) is private or non existing come from __set!";
    }
}

$obj = new stud();
$obj->course = "php"

?>