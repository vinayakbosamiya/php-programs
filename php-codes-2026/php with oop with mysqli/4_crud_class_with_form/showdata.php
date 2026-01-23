<?php
include 'db.php';

$obj = new database();
$col = "students.id,students.name,students.age,students.city,citydb.cname";
$join = "citydb ON students.city = citydb.id ";
$limit = 4;

$obj->select('students','*',$join,null,null,$limit);
$res = $obj->getRes();
// echo "<pre>";
// print_r($res);
// echo "</pre>";
echo "<table border='1' width='50%'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>City</th>
    </tr>";
foreach($res as list("id"=>$id,"name"=>$name,"age"=>$age,"cname"=>$city)){ //["id" => $id, "name" => $name] = $res; === $id = $res["id"]; $name = $res["name"]; $age = $res["age"]; $city = $res["cname"];  // consider $res["id"] => $id ,$res["name"] => $name
    echo "<tr><td>$id </td><td>$name </td><td> $age </td><td> $city </td><tr>";
}
echo "</table>";
$obj->pagination('students',$join,null,$limit);
// echo " Select result: <br><br>";

?>
<style>
    td{
        text-align: center;
    }
</style>