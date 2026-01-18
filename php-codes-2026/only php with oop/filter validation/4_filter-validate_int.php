<?php
// filter_var(variable,validateFunction,option/flag);
$var = 50;
// echo filter_var($var,FILTER_VALIDATE_INT)
// below the array is is array and key value pair and key is fixed of array that is not change by the developer, this key must be same as when i user "filter_var" function
$option = array(
    "options"=>array(
        "min_range"=>20,
        "max_range"=>30,
    )
);
// this var_dump is show value and datatype of pass inside that function
var_dump(filter_var($var,FILTER_VALIDATE_INT,$option));
if(filter_var($var,FILTER_VALIDATE_INT,$option)){
    echo "<br>$var is integer";
}else{
    echo "<br>$var is not integer";
}
?>