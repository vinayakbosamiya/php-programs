<!-- using mysqli_fetch_assoc() function -->
<?php

$servername = "localhost";
$username = "root";
$pas = "";
$database = "v";

// CONNECT DATABASE WITH PHPMYADMIN
$conn = mysqli_connect($servername,$username,$pas,$database);

// CHECK CONDITION DATABASE IS CONNECT OR NOT CONNENCT
if(!$conn)
{
    die("sorry we feild to connect ".mysqli_connect_error());
}
else{
    echo "database is created <BR>";
}
$sql = "SELECT * FROM `vinay`";
$result = mysqli_query($conn,$sql); 

$num = mysqli_num_rows($result);
echo $num;
if($num > 0)
{
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    echo "<br>";
    $row = mysqli_fetch_assoc($result);
    var_dump($row);
    echo "<br>";
}

?>