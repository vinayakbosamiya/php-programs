<?php
session_start();
if(isset($_SESSION['username'])){
echo "welcom to ". $_SESSION['username'];
echo "<br>";
echo "your faverite category is ". $_SESSION['fev'];
}
else{

    echo "please try again to login";
}
?>