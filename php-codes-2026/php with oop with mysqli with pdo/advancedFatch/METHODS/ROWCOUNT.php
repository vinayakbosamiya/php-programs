<?php
$db_name = "mysql:host=localhost;dbname=sc";
$conn = new PDO($db_name, "root", "");

$sql = $conn->prepare("SELECT name,city FROM test");
$sql->execute();
echo $sql->rowCount(); // this method return number of rows like 1,2,3....
// $res = $sql->fetchAll(PDO::FETCH_KEY_PAIR); // FETCH_KEY_PAIR WHEN USE THIS IN SELECT QUERY MINIMUM AND MAXIMUM AVAILABLE 2 COLUMNS NAMES
// echo "<pre>";
// print_r($res);
// echo "</pre>";
