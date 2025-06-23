<?php
session_start();
if (!isset($_SESSION['logedin']) || $_SESSION['logedin'] != true) {
    header('location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <title>welcome <?php $_SESSION['username'] ?> our website </title>
        <?php  
        include 'components/_navs.php';
        ?>
    </head>
    <div class="container my-3">
    <h1>welcome - <?php echo $_SESSION['username'] ?> our website </h1>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done! Your Are LoggedIn <?php echo $_SESSION['username'] ?> </h4>
        <p>Hey How Are You Doing? Welcom To Our Website <?php echo $_SESSION['username'] ?> </p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to Logout This Link <a href="logout.php"> Logout Now </a></p>
    </div>
</div>
</body>

</html>