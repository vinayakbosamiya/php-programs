<?php

session_start();

// $_SESSION["name"] this is global variable and it is array in session and in this session is "name" is id of that session
$_SESSION["name"]= "vinay";
if(!isset($_SESSION["name"])){
    echo"session is not set!";
}
else{

    echo "session is set";
}

?>