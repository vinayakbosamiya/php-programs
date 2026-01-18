<?php
class calc{
    public $a,$b;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
// __invoke() this function is useful when we want to call the object as a function or use a obj as function
    public function __invoke(){
        echo $this->a+$this->b;
    }
    public function sum(){
        echo $this->a+$this->b;
    }
}

$obj = new calc(10,20);
// call the object as function using __invoke() method in the class 
$obj();
// echo $obj->sum();

?>