<?php
// filter_var(variable,validateFunction,flag);

$var = "12.2";
 
$var =  filter_var($var,FILTER_SANITIZE_NUMBER_INT);  
 if(filter_var($var,FILTER_SANITIZE_NUMBER_INT)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>