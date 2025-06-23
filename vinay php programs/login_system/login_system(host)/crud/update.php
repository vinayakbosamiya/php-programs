<?php

$server = "localhost";
$username = "root";
$psw = "";
$db = "v";

$conn = mysqli_connect($server,$username,$psw,$db);
$sql = "SELECT * FROM `vinay` WHERE `country` = 'junagadh'";
$res = mysqli_query($conn,$sql);
$n = mysqli_num_rows($res);
$numbers = 1;
if(!$conn)
{
    die("database is not connected😔".mysqli_connect_error());
}
else{
    echo "database connected😎";
    echo "<br>";
    echo "<br>";
}

if($n<=0){
    echo "record is not found or not available";
}
if($n>0){

while($r = mysqli_fetch_assoc($res))
{
    echo $numbers . " - ". $r['firstname']. " ".$r['lastname']. " ".$r['country'];
    echo "<br>";
    $numbers++;
}
}
// this is update query
// this available 2 query $sqll1 and $sqll2 you can be use only one; available this for you study purpose
$sqll1 = "UPDATE `vinay` SET `lastname` = 'chauhan' WHERE `vinay`.`ID` = 37";
$sqll2 = "UPDATE `vinay` SET `lastname` = 'chauhan' WHERE `ID` = 40";
$res = mysqli_query($conn,$sqll2);
$ef = mysqli_affected_rows($conn);
echo "<br> nums =  ".$ef;
echo "<br>";
echo "<br>";
if(!$res)
{
    die("database is not update");
}
else{
    echo "database is updated";
}
?>