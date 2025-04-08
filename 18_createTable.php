<?php 
// DECLARE ALL VARIABLE IN THIS FILE
$servername = "localhost";
$username = "root";
$pas = "";
$database = "v";

// CONNECT DATABASE WITH PHPMYADMIN
$conn= mysqli_connect($servername,$username,$pas,$database);

// CHECK CONDITION DATABASE IS CONNECT OR NOT CONNENCT
if(!$conn)
{
    die("sorry we feild to connect ".mysqli_connect_error());
}
else{
    echo "database is created<BR>";
}

// THIS LINE IS CREATE A TABLE IN DATABASE 
$sql = "CREATE TABLE `VINAY`(ID INT(6) NOT NULL AUTO_INCREMENT, `NAME` VARCHAR(10) NOT NULL , `EMAIL` VARCHAR(30) NOT NULL ,PRIMARY KEY(`ID`))";
$result = mysqli_query($conn,$sql);
if ($result) {
    echo"inside the database table is created succsessfully <br>";
}
else{
    echo "inside the database is not created".mysqli_error($conn) ."<br>";
}
?>