<?php
// this is abstract class example
abstract class parentclass{
    public $name;
    abstract protected function clc($a,$b);
};

class chieldClass extends parentclass{
    public $name;
     function clc($a,$b){
        echo $a." + ".$b." = " .$a+$b;
     }
};

$test = new chieldClass(10,20);
$test->clc(10,20);

?>