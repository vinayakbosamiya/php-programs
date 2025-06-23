<?php
// $a = array("red","green","blue","yello","purple");

// $b = array("1" => "red","2" => "green","3" => "blue","4" => "yello","5" =>  "purple");

// $d = array("vinay","232");

// print_r(array_splice($a,0,2,$d));

$a=0;$b=1;
echo $a;
echo ",$b";

$c;
$t;
for ($i=2; $i < 10; $i++) { 
    $c = $a+ $b;
    echo ",$c";
    $a = $b;
    $b = $c;
}

// 0  1  1  2  3
//    $a $b $c       




?>