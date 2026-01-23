<?php
include 'db.php';
$obj = new database();
print_r($_POST);
$name = $_POST['Name'];
$Age = $_POST['Age'];
$city = $_POST['city'];

    $val = ["name"=>$name,"age"=>$Age,"city"=>$city];
    if($obj->insert('students',$val)){
        echo "<h2 style='color:green'>Data inserted successfully</h2>";
    }
    else{
        echo "<h2 style='color:red'>Data not inserted</h2>";
    }
?>
