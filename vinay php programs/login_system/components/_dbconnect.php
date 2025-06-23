<?php

$conn = mysqli_connect("localhost","root","","users");
// echo gettype($conn);
if(!$conn){
//     echo "success";
// }
// else{
    die("error".mysqli_connect_error());
}

?>