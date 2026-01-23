<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepare statement</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>Php Prepare statement</h1>
        </div>
        <div class="content">
            <?php 
            $conn = new mysqli('localhost','root','','sc');
            if($conn->connect_error){
                die('Connection failed: '.$conn->connect_error);
            }

            $sql = $conn->prepare("SELECT * FROM test ");
            $sql->execute();

            $res = $sql->get_result();
            echo "<pre>";
            print_r($res);
            echo "</pre>";
            
            while($row = $res->fetch_object()){
              
                // below all function fetch all row data one by one using while loop
                
                // for fetch_assoc() =
                // echo $row['id'].' - '. $row['name'].' - '.$row['age'].' - '.$row['city'].'<br>';
                // for fetch_object() =
                // echo $row['id'].' - '. $row['name'].' - '.$row['age'].' - '.$row['city'].'<br>';
                // for fetch_row() =
                //  echo $row[0].' - '. $row[1].' - '.$row[2].' - '.$row[3].'<br>';
                
                // fetch_object() = 
                $arr = get_object_vars($row); // this function is used for convert object to array 
                echo $arr['id'].' - '. $arr['name'].' - '.$arr['age'].' - '.$arr['city'].'<br>';
                // echo "<pre>";
                // print_r($arr);
                // echo "</pre>";
            }
            ?>
        </div>
    </div>
</body>
</html>