<?php 
session_start();
if(isset($_SESSION['id'])){
    header("location:dashboard.php");
}

$conn = new mysqli("localhost","root","","sc");
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sql injection </title>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>User Login</h1>
        </div>
        <div class="content">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="form-group">
                    
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required autocomplete="off"><br>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required autocomplete="off"><br>
                </div>
                    
                <input type="submit" value="Login" class="btn" name="login" id="submit">
            </form>
            <?php 
            if(isset($_POST['login'])){
             if(!isset($_POST['username']) ||  $_POST['username']== ''){
                echo "<h2 style='color:red'>Please fill all the fields</h2>";
             }else if(!isset($_POST['password']) || $_POST['password'] == ''){
                echo "<h2 style='color:red'>Please fill all the fields</h2>";
             }else{
                $username = $_POST['username'];
                $password = $_POST['password'];

                echo $sql = "select * from users where user_email='$username' and password='$password'";
                // $res = $conn->query($sql);
                $sql= $conn->prepare("select * from users where user_email = ? and password = ? ");
                $sql->bind_param("ss",$username,$password);
                $sql->execute();
                $res = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
                if(count($res) > 0){
                     
                        session_start();
                        $_SESSION['id'] = $res[0]['id'];
                        $_SESSION['first_name'] = $res[0]['first_name'];
                        
                        header("location:dashboard.php");
                     
                }else{
                    echo "<h2 style='color:red'>Invalid username or password</h2>";
                }
             }
            }
            ?>
        </div>
    </div>
</body>
</html>