<!--<?php
// $con = mysqli_connect("localhost","root","");
// $database =  "CREATE DATABASE VINAY";
// $result = mysqli_query($con,$database);
// if(!$con){
//     echo "data base is not created";
// }
// echo "database is succsesfully<br>";
// if ($result) {
//     echo"db is created succsesfully";
// }
// else{
//     echo"db  ".mysqli_error($con);
// }

// echo"databse is ".var_dump($result);
?>-->

<?php 
$con = mysqli_connect("localhost","root","");
$db = "CREATE DATABASE note";
$res = mysqli_query($con,$db); // myphpadmin\\v
// var_dump($res);
if ($res) {
    echo"db is created";
}
else{
    echo "db ".mysqli_error($con);
}


?>

