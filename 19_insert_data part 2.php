<?php
$servername = "localhost";
$username = "root";
$pas = "";
$database = "v";

$conn = mysqli_connect($servername,$username,$pas,$database);
$fnm = "VINAY";
$lnm = "katri";
$sql = "INSERT INTO `vinay`(`First Name`,`Last Name`) VALUES('$fnm','$lnm')";

$result = mysqli_query($conn,$sql);
if ($result) {
    die("value is inserted")."<br>";
}
else{
    echo "value is not inserted ".mysqli_error($conn)."<br>";
}


?>
<!-- the end -->
<!-- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
































































<!-- this code is not usable for your php code this code is used to after upload file no. 20 this code use in 20th file -->


<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post method</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="getAndPost.php" method="post">
    <form action="getAndPost.php" method="get"> 
        <label for="fname">email</label>
        <input type="text" name="fname"> <br>
        <label for="lname">lname</label>
        <input type="text" name="lname">
       <button >submit</button>
        <input type="reset" value="reset">
    </form>



 
// $servername = "localhost";
// $username = "root";
// $pas = "";
// $database = "v";

// $fname = 'fname';
// $lname = 'lname';

// $conn = mysqli_connect($servername,$username,$pas,$database);

// $sql = "INSERT INTO `vinay`(`First Name`,`Last Name`) VALUES('$fname','$lname')";

// $result = mysqli_query($conn,$sql);
// if ($fname && $lname) {
//     die("value is inserted")."<br>";
// }
// else{
//     echo "value is not inserted ".mysqli_error($conn)."<br>";
// }


 
 </body>

</html> -->
