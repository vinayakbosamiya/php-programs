<?php
session_start();
if(isset($_SESSION['mobile'])){
    header("location:page.php");
}
?>

<form action="" method="post">
    <input type="text" name="mob" id="mob" placeholder="Mobile number">
    <input type="text" name="pas" id="pas" placeholder="password">
    <button type="submit" name="sbt" value="login now">login now</button>
</form>
<?php

if(!empty($_POST['mob']) && !empty($_POST['pas']) && isset($_POST['sbt'])){
    $nm = $_POST['mob'];
    $ps = $_POST['pas'];
    $conn = mysqli_connect("localhost","root","","ses");
    $sql = "SELECT * FROM divd WHERE mobile='$nm'AND pas = '$ps'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        $_SESSION['mobile'] = $row['mobile'];
        header("location:page.php");
        exit();
    }
    else{
        echo "wrong password";
    }
}
else if (empty($_POST['mob']) || empty($_POST['pas']) && isset($_POST['sbt'])){
    echo "fill this form";
}
?>