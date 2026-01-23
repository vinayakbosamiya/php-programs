<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 //  $sql = $conn->prepare("select * from students");

//  $sql = $conn->prepare("select * from students WHERE city = ?");
 $city = 'delhi';
 $id = 5;
 

 $sql = $conn->prepare("select * from test WHERE city = :city AND id < :id ");
 

 $sql->execute(array(':city'=>$city,':id'=> $id)); //Note: -  :city and :id are placeholder or variable name

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