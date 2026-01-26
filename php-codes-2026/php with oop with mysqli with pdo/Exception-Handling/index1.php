<?php
 $n = 0;
 try{
    if($n <= 0){
        throw new Exception("Number must be greater than 0");
    }
    $div = 2/$n;
    echo $div;
 }
 catch(Exception $e){
    echo $e->getMessage();
 }

?>