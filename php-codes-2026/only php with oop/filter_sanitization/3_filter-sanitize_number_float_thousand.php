<?php
// filter_var(variable,validateFunction,flag);

$var = "12,00,000";
//  FILTER_FLAG_ALLOW_THOUSAND this allow IS ALLOW THE COMMA AFTER THE NUMBERS
$var =  filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_THOUSAND);  
 if(filter_var($var,FILTER_SANITIZE_NUMBER_FLOAT)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>