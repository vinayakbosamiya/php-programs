<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 //  $sql = $conn->prepare("select * from students");

//  $sql = $conn->prepare("select * from students WHERE city = ?");
 $city = 'delhi';
 $id = 5;
 

 $sql = $conn->prepare("INSERT INTO test (name,city) VALUES (:name,:city) ");
 

 $sql->execute(array(':city'=>'rajkot',':name'=> 'ankit')); //Note: -  :city and :id are placeholder or variable name

 
 

 

?>