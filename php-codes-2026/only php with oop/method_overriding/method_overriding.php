<?php
class base{
    public $name = "Parent class";
    public function clc($a,$b){
        return $a * $b;
    }
}
class derived extends base{
    public $name = "chield class";
    public function clc($a,$b){
        return $a + $b;
    }
};

$test = new base();
echo $test->clc(10,10);
?>