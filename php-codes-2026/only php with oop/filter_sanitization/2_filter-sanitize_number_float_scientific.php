<?php
// filter_var(variable,validateFunction,flag);

$var = "12Rd";
//  FILTER_FLAG_ALLOW_SCIENTIFIC allow the characters with numbers
$var =  filter_var(  $var,
    FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_SCIENTIFIC);  
 if(filter_var($var,FILTER_VALIDATE_FLOAT)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>