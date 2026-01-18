<?php
$var = "A1:D4:F3:B1:F2:E6";
 
// below the array is is array and key value pair and key is fixed of array that is not change by the developer, this key must be same as when i user "filter_var" function
// $option = array(
//     "options"=>array(
//         "min_range"=>20,
//         "max_range"=>30,
//     )
// );
// this var_dump is show value and datatype of pass inside that function

// filter_var(variable,validateFunction,option/flag);
var_dump(filter_var($var,FILTER_VALIDATE_MAC )); // FILTER_NULL_ON_FAILURE is return null because this option/flag use in this statement
      if(filter_var($var,FILTER_VALIDATE_MAC )){
            echo "<br>$var is valid";
        }else{
            echo "<br>$var is not valid";
        }
?>