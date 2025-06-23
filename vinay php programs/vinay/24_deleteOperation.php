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
$sql = "DELETE FROM `vinay` WHERE `vinay`.`lastname` = 'chauhan'";
$sql = "DELETE FROM `vinay` WHERE `country` = 'rajkot'";

$res = mysqli_query($conn,$sql);
$ef = mysqli_affected_rows($conn);
echo "<br> nums =  ".$ef;
echo "<br>";
echo "<br>";
if($res)
{
    die('recored is deleted');
}
else{
    echo "recored is not deleted";
}
?>