<?php
include 'db_with_pagination.php';

$obj = new database();
// $obj->insert('students',['name'=>"raman","age"=>30,"city"=>"goa"]);
// echo "Insert result: ";
// print_r($obj->getRes());

// $obj->update('students',['name'=>"RAHUL KUMAR","age"=>20,"city"=>"rajkot"],'id="12"');
// echo "Update result: ";
// print_r($obj->getRes());

// $obj->select('students','name',null,'age between 19 AND 20',null,2);
// in below code select and pagination funciton argument must be same means location must be same
$obj->select('students','name',null,null,null,2);
echo " Select result: <br><br>";
echo "<pre>";
print_r($obj->getRes());
echo "</pre>";

$obj->pagination('students',null,null,2);
echo " Select result: <br><br>";
echo "<pre>";
print_r($obj->getRes());
echo "</pre>";

// $obj->selectSql('SELECT * FROM students where id="3"');
// echo "Select result: ";
// print_r($obj->getRes());

// $obj->delete('students','id="11"');
// echo "Delete result: ";
// print_r($obj->getRes());


?>