<?php
$db_name = "mysql:host=localhost;dbname=sc";
$conn = new PDO($db_name, "root", "");

$sql = $conn->prepare("SELECT name,city FROM test");
$sql->execute();
// $res = $sql->fetchAll(PDO::FETCH_GROUP);// PDO::FETCH_GROUP is used to group data by specific column but when use PDO::FETCH_GROUP which first column pass in select query and grouped by that column that data
// $res = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
$res = $sql->fetchAll(PDO::FETCH_KEY_PAIR); // FETCH_KEY_PAIR WHEN USE THIS IN SELECT QUERY MINIMUM AND MAXIMUM AVAILABLE 2 COLUMNS NAMES
echo "<pre>";
print_r($res);
echo "</pre>";
