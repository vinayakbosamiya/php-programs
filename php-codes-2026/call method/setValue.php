<?php
// this call method is used for private methods
// Note:- when access private or not exist method outside of class then this function call automatically

class stud{
        private $name;
        private function setname($n){
            $this->name = $n;
        }
        function display(){
            echo "your name is $this->name";
        }
        function __call($method,$args){
           if(method_exists($this,$method)){
                call_user_func_array([$this,$method],$args); // this method is return values that was call a object 
           }else{
            echo "this method do not exist!";
           }
        }
}

$obj = new stud();
$obj->setname("saurabh");
$obj->display();
// $obj->personal("saurabh");
?>