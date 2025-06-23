<?php
include 'components/_dbconnect.php';
$login = false;
$showError = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // $sql = "select * from users where username = '$username' AND psw = '$password'";
  $sql = "select * from users where username = '$username'";
  $res = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($res);
  // echo $num;
  if ($num == 1) {
    while ($row = mysqli_fetch_assoc($res)) {
      if (password_verify($password, $row['psw'])){
        $login = true;

      session_start();
      $_SESSION['logedin'] = true;
      $_SESSION['username'] = $username;
      header("location: welcome.php");
      }
      else {
        $showError = 'sorry Your username or password is incorrect';
      }
    }
  } else {
    $showError = 'sorry Your username or password is incorrect';
  }
}
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <style>
    #form {
      margin-top: 100px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  </style>
</head>

<body>
  <?php
  require 'components/_nav.php';
  if ($login) {

    echo '<div class="alert alert-success" role="alert">
        <b>Success!</b>.you are logged in </div>';
  };
  if ($showError) {
    echo '<div  class="alert alert-danger"  role="alert">
        <b>Signup Field !</b>' . $showError . '
        </div>';
  }    ?>

  <div class="container my-4">
    <h1 class="text-center" style="margin-top: 100px;">login to our website</h1>

    <form id="form" action="login.php" method="post">
      <div class="form-group col-md-6">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

      </div>
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary col-md-6" id="sbm">Login</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>