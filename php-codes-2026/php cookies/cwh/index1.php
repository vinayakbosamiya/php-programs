<?php
echo "php cookies <br>";
$name = "categories";
$val = "games";
setcookie($name,$val,time() + 600,"/"); 

if(!isset($name)){
    echo"cookie is not set!<br>";
}
else{
    echo "cookie is set !";
}
?>