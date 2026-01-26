<?php
function divi($n){
    try{
        if($n <= 0){
            throw new Exception("Number must be greater than 0");
        }
        $div = 2/$n;
        echo $div;
    }
    catch(Exception $e){
        // echo $e->getCode();
        echo $e->getFile();
        // echo $e->getMessage();
        // echo $e->getLine();
    }
}
$n = 0;
divi($n)
?>