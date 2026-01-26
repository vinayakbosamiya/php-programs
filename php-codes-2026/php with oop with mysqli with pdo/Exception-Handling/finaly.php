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
    }finally{ // this "finally" will execute when we have used try catch block but this must be included
        echo "<br> finally block";
    }
}
$n = 0;
divi($n);
$n = 2;
divi($n);
?>