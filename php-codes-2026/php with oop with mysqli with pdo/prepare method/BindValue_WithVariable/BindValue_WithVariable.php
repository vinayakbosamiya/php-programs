<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 //  $sql = $conn->prepare("select * from students");

//  $sql = $conn->prepare("select * from students WHERE city = ?");
 $city = 'delhi';
 $id = 5;
 
//Note: -  :city and :id are placeholder or variable name
 $sql = $conn->prepare("select * from test WHERE city = :city AND id < :id ");
 $sql->bindValue(':city',$city,PDO::PARAM_STR);
 $sql->bindValue(':id',$id,PDO::PARAM_INT); // instead of PDO::PARAM_STR use PDO::PARAM_LOB , PDO::PARAM_BOOL , PDO::PARAM_NULL with specific data type

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
 

 

?>