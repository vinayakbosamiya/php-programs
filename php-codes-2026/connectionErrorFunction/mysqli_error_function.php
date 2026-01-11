<?php

    $conn = mysqli_connect("localhost","root","","info");
    $sql = "select * from users";
    $result = mysqli_query($conn,$sql);
  
 print_r( "unsuccessful sql: ".mysqli_connect());
     

    $str = "";
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo $row['first_name']." ".$row['last_name']."<br>";
        }
    }

?>