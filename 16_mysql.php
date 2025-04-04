<?php
echo "welcome to php program with database let's start with me"."<br>"."<br>";

// $servarName = "localhost";
// $userName = "root";
// $password = "vinay";


$conn = mysqli_connect("localhost", "root",""); 


// this is only use for check how it work die and how to throw warining and error
//$conn = mysqli_connect("localhost", "root"," ");

if (!$conn) {// this  if condition is only work first $conn is convert to do comment and convert to do second $conn in uncomment
    die("sorry you are not use this database at that time:".mysqli_connect_error());
}

    echo "connection was successful";

?>

