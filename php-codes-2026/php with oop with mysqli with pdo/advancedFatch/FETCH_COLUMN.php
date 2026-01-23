<?php
$db_name = "mysql:host=localhost;dbname=sc";
$conn = new PDO($db_name, "root", "");

$sql = $conn->prepare("SELECT * FROM test");
$sql->execute();
$res = $sql->fetchAll(PDO::FETCH_COLUMN,1);// in this line PDO::FETCH_COLUMN is type of show data and second "1" is refers to column number 

echo "<pre>";
print_r($res);
echo "</pre>";
