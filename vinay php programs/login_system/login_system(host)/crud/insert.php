<?php
$servername = "localhost";
$username = "root";
$pas = "";
$database = "v";

$conn = mysqli_connect($servername,$username,$pas,$database);

// CHECK CONDITION DATABASE IS CONNECT OR NOT CONNENCT
if(!$conn)
{
    die("sorry we feild to connect ".mysqli_connect_error());
}
else{
    echo "database is created <BR>";
}

$sql = "INSERT INTO `vinay`(`name`,`email`) VALUES('VINAY','BOSAMIYA')";

$result = mysqli_query($conn,$sql);
if ($result) {
    die("value is inserted"). "<br>";
}
else{
    echo "inside the database is not created".mysqli_error($conn)."<br>";
}


?>