<!-- using mysqli_fetch_assoc() function -->
 <!-- this file is connected with "20_form_with_data(fix).php" -->
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

// $num = mysqli_num_rows($result);
// echo $num;

while($row = mysqli_fetch_assoc($result))
{
    echo "<br>";
  echo $row['ID'] . " - ". $row['firstname']. " - ". $row['lastname'];
  echo "<br>";
}

?>