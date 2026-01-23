<?php
 $db_name = 'mysql:host=localhost;dbname=sc';
 $conn = new pdo($db_name,'root',''); 
 $sql = $conn->query("select * from students");
//  $res = $sql->fetchAll(PDO::FETCH_ASSOC);
//  echo "<pre>";
//  echo count($res);
//  echo "</pre>";


//  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
//      echo "<pre>";
//     //  print_r($row);
//     echo $row['id'].'-'.$row['name'].'-'.$row['age'].'<br>';
//      echo "</pre>";
//  }

//  while($row = $sql->fetch(PDO::FETCH_NUM)){
//      echo "<pre>";
//     //  print_r($row);
//     echo $row[0].'-'.$row[1].'-'.$row[2].'<br>';
//      echo "</pre>";
//  }

 while($row = $sql->fetch(PDO::FETCH_OBJ)){
     echo "<pre>";
    //  print_r($row);
    echo $row->id.'-'.$row->name.'-'.$row->age.'<br>';
     echo "</pre>";
 }

//  while($row = $sql->fetch(PDO::FETCH_ASSOC)){
//      echo "<pre>";
//     //  print_r($row);
//     echo $row['id'].'-'.$row['name'].'-'.$row['age'].'<br>';
//      echo "</pre>";
// }

?>