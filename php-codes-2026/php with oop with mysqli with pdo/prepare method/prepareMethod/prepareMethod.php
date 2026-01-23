<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 //  $sql = $conn->prepare("select * from students");
 
 $city = 'Delhi';
 $id = 5;
//  $sql->bindParam(1,$city,PDO::PARAM_STR);

 $sql = $conn->prepare("select * from test WHERE id < ? AND city = ?");
//  default use in programming in bindParam() method
 $sql->bindParam(1,$id,PDO::PARAM_INT); // instead of PDO::PARAM_STR use PDO::PARAM_LOB , PDO::PARAM_BOOL , PDO::PARAM_NULL with specific data type
 $sql->bindParam(2,$city,PDO::PARAM_STR); // instead of PDO::PARAM_STR use PDO::PARAM_LOB , PDO::PARAM_BOOL , PDO::PARAM_NULL with specific data type
 $sql->execute();

 $res = $sql->fetchAll(PDO::FETCH_ASSOC);

 if(count($res)){
    foreach($res as $row){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
 }else{
    echo "No data found";
 }

//  below is optional
//  $res = $sql->fetchAll(PDO::FETCH_ASSOC);
//  echo "<pre>";
//  echo count($res);
//  echo "</pre>";

 

 while($row = $sql->fetch(PDO::FETCH_OBJ)){
     echo "<pre>";
    //  print_r($row);
    echo $row->id.'-'.$row->name.'-'.$row->age.'<br>';
     echo "</pre>";
 }

 

?>