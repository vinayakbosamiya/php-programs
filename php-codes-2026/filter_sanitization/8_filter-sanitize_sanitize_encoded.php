<?php
// filter_var(variable,validateFunction,flag);
// FILTER_SANITIZE_URL this flag is convert invalid-url to valid url , this remove some special character
$var = "<h1> how & are & you</h1> " ;
// FILTER_SANITIZE_ENCODED this flag is useful when convert special character in to encode 
/* 

when i want to not show special character or 
i want to store data in database and not show special character or 
not hack the details of the user from the database 
i can use this function "FILTER_SANITIZE_ENCODED" 

*/
$var =  filter_var($var,FILTER_SANITIZE_ENCODED);  
 if(filter_var($var,FILTER_SANITIZE_ENCODED)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>