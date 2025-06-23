<?php
// include 'components/__db.php';
include 'components/loginfolder/__db.php';
$showAlert = false;
$showError = false;
// $usernameAlert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // //  //  use this code 
    //    $sql = "SELECT * FROM users WHERE username = ?"; 
    //    $stmt = $conn->prepare($sql);
    //    $stmt->bind_param("s", $username);
    //    $stmt->execute();
    //    $result = $stmt->get_result();


    // if ($result->num_rows > 0) {
    //     // // // ✅ Username exists — show message and stop
    //     $showError = "<b>Username already exists.</b>";
    // }

    // // // // // // //  or 

    // // // // // // //  note:- store in variable
    //  // $sql = ALTER TABLE `users` ADD UNIQUE(`username`);  
    // // // after run sql query and use below code

    // // // // // // // or

    // // // // // 'above sql code not use the user' otherwise goto phpmyadmin and username convert to unique 
    // // // step = go phpmyadmin and go table structure and show more option in table rows to click more and select unique option

    //  // // // // below code


    $existsSql = "select * from users WHERE username = '$username'";
    $result = mysqli_query($conn, $existsSql);
    $existsnum = mysqli_num_rows($result);
    if ($existsnum > 0) {
        $showError = "<b>Username already exists.</b>";
    } else {

        if ($password === $cpassword) {
            $hasspsw = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `psw`, `dt`) VALUES ('$username', '$hasspsw', current_timestamp())";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                $showAlert = 'Your Account Is Created Successfully And to Login Now';
            }
        } else {
            $showError = 'Your Password or Confirm Password is not Matched';
        }
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
    if ($showAlert) {

        echo '<div class="alert alert-success" role="alert">
        <b>Success!</b>.' . $showAlert . '</div>';
    };
    if ($showError) {
        echo '<div  class="alert alert-danger"  role="alert">
        <b>Signup Field !</b>' . $showError . '
        </div>';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center" style="margin-top: 100px;">Signup to our website</h1>
        <form id="form" action="signup.php" method="post">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" maxlength="100" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">

            </div>

            <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>




















<?php
// include 'components/__db.php';
include 'components/loginfolder/__db.php';
$showAlert = false;
$showError = false;
// $usernameAlert = false;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // //  //  use this code 
    //    $sql = "SELECT * FROM users WHERE username = ?"; 
    //    $stmt = $conn->prepare($sql);
    //    $stmt->bind_param("s", $username);
    //    $stmt->execute();
    //    $result = $stmt->get_result();


    // if ($result->num_rows > 0) {
    //     // // // ✅ Username exists — show message and stop
    //     $showError = "<b>Username already exists.</b>";
    // }

    // // // // // // //  or 

    // // // // // // //  note:- store in variable
    //  // $sql = ALTER TABLE `users` ADD UNIQUE(`username`);  
    // // // after run sql query and use below code

    // // // // // // // or

    // // // // // 'above sql code not use the user' otherwise goto phpmyadmin and username convert to unique 
    // // // step = go phpmyadmin and go table structure and show more option in table rows to click more and select unique option

    //  // // // // below code


    $existsSql = "select * from users WHERE username = '$username'";
    $result = mysqli_query($conn, $existsSql);
    $existsnum = mysqli_num_rows($result);
    if ($existsnum > 0) {
        $showError = "<b>Username already exists.</b>";
    } else {

        if ($password === $cpassword) {
            $hasspsw = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`username`, `psw`, `dt`) VALUES ('$username', '$hasspsw', current_timestamp())";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                $showAlert = 'Your Account Is Created Successfully And to Login Now';
            }
        } else {
            $showError = 'Your Password or Confirm Password is not Matched';
        }
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
    if ($showAlert) {

        echo '<div class="alert alert-success" role="alert">
        <b>Success!</b>.' . $showAlert . '</div>';
    };
    if ($showError) {
        echo '<div  class="alert alert-danger"  role="alert">
        <b>Signup Field !</b>' . $showError . '
        </div>';
    }
    ?>

    <div class="container my-4">
        <h1 class="text-center" style="margin-top: 100px;">Signup to our website</h1>
        <form id="form" action="signup.php" method="post">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" maxlength="100" class="form-control" id="username" name="username" aria-describedby="emailHelp">

            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group col-md-6">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">

            </div>

            <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>

</html>