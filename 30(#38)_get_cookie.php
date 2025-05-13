<?php
 $cat = $_COOKIE['category'];
 if(!$cat)
 {
    echo "sorry Your cookie is not set";
 }
 else{
    echo "your cookie is set now<br>";
    echo $cat;

 }
?>