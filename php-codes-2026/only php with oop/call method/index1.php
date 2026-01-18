<?php
// this call method is used for private methods
// Note:- when access private or not exist method outside of class then this function call automatically

class stud{
        private $name;
        private function setname($n){
            $this->name = $n;
        }
        function __call($method,$args){
            echo "this method($method) is private or not exist!<br>";
        }
}

$obj = new stud();
$obj->setname("saurabh");
$obj->personal("saurabh");
?>