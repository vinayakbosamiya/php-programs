<!-- in this code use fetch_all function in php for fetch data from database -->
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
            $sql = $conn->prepare("SELECT * FROM test WHERE city=?");
            $sql->bind_param('s',$city);
            $sql->execute();

            // $res = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            $res = $sql->get_result()->fetch_all(MYSQLI_NUM);
            echo "<pre>";
            print_r($res);
            echo "</pre>";
            
            
            ?>
        </div>
    </div>
</body>
</html>