<?php
include 'db.php';

$obj = new database();
$col = "students.id,students.name,students.age,students.city,citydb.cname";
$join = "citydb ON students.city = citydb.id ";
$limit = 2;

$obj->select('students',$col,$join,null,null,$limit);
echo " Select result: <br><br>";
echo "<pre>";
print_r($obj->getRes());
echo "</pre>";

$obj->pagination('students',$join,null,$limit);
echo " Select result: <br><br>";
echo "<pre>";
print_r($obj->getRes());
echo "</pre>";

// $obj->insert('students',['name'=>"raman","age"=>30,"city"=>"goa"]);
// echo "Insert result: ";
// print_r($obj->getRes());

// $obj->update('students',['name'=>"RAHUL KUMAR","age"=>20,"city"=>"rajkot"],'id="12"');
// echo "Update result: ";
// print_r($obj->getRes());

// $obj->select('students','name',null,'age between 19 AND 20',null,2);
// in below code select and pagination funciton argument must be same means location must be same

// $obj->selectSql('SELECT * FROM students where id="3"');
// echo "Select result: ";
// print_r($obj->getRes());

// $obj->delete('students','id="11"');
// echo "Delete result: ";
// print_r($obj->getRes());


?>