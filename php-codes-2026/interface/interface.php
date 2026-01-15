<?php
interface parent1{
    function sum($a,$b);
    
};

interface parent2{
    function sub($c,$d);
    
};

class childClass implements parent1 , parent2{
public function sum($a,$b){
    echo $a + $b;
}
public function sub($c,$d){
    echo $c - $d;
}
}

$test = new childClass();
$test->sub(20,10);
$test->sum(30,10)

?>