<?php
include 'db.php';

$obj = new database();
$obj->insert('students',['name'=>"raman","age"=>30,"city"=>"goa"]);
echo "Insert result: ";
print_r($obj->getRes());


?>
