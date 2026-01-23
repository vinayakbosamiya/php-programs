<?php
$db_name = "mysql:host=localhost;dbname=sc";
$conn = new PDO($db_name, "root", "");

$conn->prepare("insert into test(name,city,age) values(?,?,?)")->execute(array('rohit','mumbai',30));
// $sql->execute();
// $res = $conn->exec($sql); // this method return number of rows affected. but in this function not execute select query only execute update,insert,delete query.
// echo $res;
echo $conn->lastInsertId();
// $sql->execute();

 ?>
