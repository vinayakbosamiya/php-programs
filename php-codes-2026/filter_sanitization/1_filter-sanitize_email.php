<?php
// filter_var(variable,validateFunction,flag);
// FILTER_SANITIZE_EMAIL is remove the special character that email is not allow, in other words this flag is convert invalid-email to valid email
$var = "exam(ple)@examp//le.com";
 
echo filter_var($var,FILTER_SANITIZE_EMAIL);  
if(filter_var($var,FILTER_SANITIZE_EMAIL)){
    echo "<br>$var is valid";
}else{
    echo "<br>$var is not valid";
}
?>