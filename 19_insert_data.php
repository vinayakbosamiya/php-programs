<?php
$servername = "localhost";
$username = "root";
$pas = "";
$database = "v";

$conn = mysqli_connect($servername,$username,$pas,$database);

$sql = "INSERT INTO `vinay`(`name`,`email`) VALUES('VINAY','BOSAMIYA')";

$result = mysqli_query($conn,$sql);
if ($result) {
    die("value is inserted")."<br>";
}
else{
    echo "value is not inserted ".mysqli_error($conn)."<br>";
}


?>