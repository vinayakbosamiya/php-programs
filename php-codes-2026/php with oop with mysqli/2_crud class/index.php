<?php
include 'db.php';

$obj = new database();
// $obj->insert('students',['name'=>"raman","age"=>30,"city"=>"goa"]);
// echo "Insert result: ";
// print_r($obj->getRes());

// $obj->update('students',['name'=>"RAHUL KUMAR","age"=>20,"city"=>"rajkot"],'id="12"');
// echo "Update result: ";
// print_r($obj->getRes());

$obj->select('students','name',null,'age between 19 AND 20',null,2);
echo "Select result: ";
print_r($obj->getRes());

// $obj->selectSql('SELECT * FROM students where id="3"');
// echo "Select result: ";
// print_r($obj->getRes());

// $obj->delete('students','id="11"');
// echo "Delete result: ";
// print_r($obj->getRes());


?>
