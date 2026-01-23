<?php
$db_name = "mysql:host=localhost;dbname=sc";
$conn = new PDO($db_name, "root", "");

$sql = "update test set city='delhi' where city='rajkot'";
$res = $conn->exec($sql); // this method return number of rows affected. but in this function not execute select query only execute update,insert,delete query.
echo $res;
// $sql->execute();

// $res = $sql->fetchAll(PDO::FETCH_KEY_PAIR); // FETCH_KEY_PAIR WHEN USE THIS IN SELECT QUERY MINIMUM AND MAXIMUM AVAILABLE 2 COLUMNS NAMES
// echo "<pre>";
// print_r($res);
// echo "</pre>";
