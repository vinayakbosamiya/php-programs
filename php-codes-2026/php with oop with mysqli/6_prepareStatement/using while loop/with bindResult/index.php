<!-- in this code use bind_result function in php for fetch data from database -->
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
            $city = 'delhi';
            // $sql = $conn->prepare("SELECT * FROM test WHERE city=?");
            $sql = $conn->prepare("SELECT * FROM test");
            // $sql->bind_param('s',$city);
            $sql->execute();

            //  bind_result use for fetch only one result 
            $sql->bind_result($id,$name,$age,$city);
            while($sql->fetch()){
              echo "$id - $name - $age - $city <br>";
               
            }
            
            
            ?>
        </div>
    </div>
</body>
</html>