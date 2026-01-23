<?php
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host="localhost";
$user="root";
$password="";
$db="sc";

$conn = new mysqli($host,$user,$password,$db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `students`";
$res = $conn->query($sql);

if($res->num_rows>0){
    while($row = $res->fetch_assoc()){
        echo "Id:{$row["id"]} - Name:{$row["name"]} - age:{$row["age"]} - city:{$row["city"]} <br>";
    }    
}

else{
    echo "No records found";
}
$conn->close();

?>