<?php
// filter_var(variable,validateFunction,flag);
// FILTER_SANITIZE_URL this flag is convert invalid-url to valid url , this remove some special character
$var = "https://example@exa mple.com";
 
$var =  filter_var($var,FILTER_SANITIZE_URL);  
 if(filter_var($var,FILTER_SANITIZE_URL)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>