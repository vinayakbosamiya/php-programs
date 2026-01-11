<?php
// filter_var(variable,validateFunction,flag);
// FILTER_SANITIZE_URL this flag is convert invalid-url to valid url , this remove some special character
$var = "<h1> how & are & you</h1> " ;

/* 

FILTER_SANITIZE_SPECIAL_CHARS this function is show value as string on the webpage
but when this string store in the database to show encode of the special character 

*/
$var =  filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);  
 if(filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>