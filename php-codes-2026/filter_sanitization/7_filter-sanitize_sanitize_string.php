<?php
// filter_var(variable,validateFunction,flag);
// FILTER_SANITIZE_URL this flag is convert invalid-url to valid url , this remove some special character
$var = "how & are & you " ;
// FILTER_FLAG_ENCODE_AMP this flag is convert "&" special character into entity code of that special character
// FILTER_SANITIZE_STRING this function is use to convert a special character to encode but this is show only "view source "page
echo filter_var($var,FILTER_SANITIZE_STRING,FILTER_FLAG_ENCODE_AMP);  
 if(filter_var($var,FILTER_SANITIZE_STRING)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>