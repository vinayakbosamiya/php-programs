<?php

try{
// $db_name = "mysql:host=localhost;dbname=sc";
$db_name = "mysql:host=localhost;dbname=test";
$user = "root";
$psw="";
$conn = new PDO($db_name, $user, $psw);
$sql=$conn->prepare("SELECT1 * FROM stud");
$sql->execute();

$res = $sql->fetchAll(PDO::FETCH_ASSOC);

$err = $sql->errorInfo(); // in this line available 3 index 
if($err[1]){
    echo $err[2];

}else{
    echo "<pre>";
    print_r($res);
    echo "</pre>";

}
echo "<pre>";
print_r($err);
echo "</pre>";
}
catch(PDOException $e){
    echo $e->getMessage();  
}

?>