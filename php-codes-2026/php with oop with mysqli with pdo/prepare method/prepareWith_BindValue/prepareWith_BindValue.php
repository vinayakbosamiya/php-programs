<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 //  $sql = $conn->prepare("select * from students");


 $city = 'Delhi';
 $id = 5;
 

 $sql = $conn->prepare("select * from test WHERE city = ? AND id < ? ");
 $sql->bindValue(2,$id,PDO::PARAM_INT); // instead of PDO::PARAM_STR use PDO::PARAM_LOB , PDO::PARAM_BOOL , PDO::PARAM_NULL with specific data type
 $sql->bindValue(1,$city,PDO::PARAM_STR); 
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