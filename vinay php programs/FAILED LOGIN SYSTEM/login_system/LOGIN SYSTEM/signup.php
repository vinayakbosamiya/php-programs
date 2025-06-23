<?php
    $showAlert = false;
    $showError = false;
    $res = false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
    include "components/_dbconnect.php";
    $username = $_POST["username"];
    $password = $_POST["password"];     
    $cpsw = $_POST["cpassword"];
    $exists = false;
    if(($password == $cpsw) && $exists == false){
        $sql = "INSERT INTO `users` (`username`, `psw`, `dt`) VALUES ('$username', ' $cpsw', current_timestamp())";
        $res = mysqli_query($conn,$sql);
    }
    if($res){
        $showAlert = true;
    }
    else {
            $showError = true;
        }
    
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/index.css">
    </head>

<body>

<?php
if($showAlert){
    echo '<div class="alert alert-success" role="alert">
  <b>Success! </b> Your account has been created successfully and you can login now.
</div>';
}
else if($showError){
    echo '<div class="alert alert-danger" role="alert">
    <b>Error! </b> Password and Confirm Password do not match.
</div>';
}
?>
    <div class="container">
        <h1 id="h1" class="text-center" style="padding-top:61px; color: red; height: 100px; margin : 90px"></h1>
        <form action="signup.php" method="POST">

            <div style="margin-top: 100px; display: flex; align-items: center; flex-direction: column;">

                <div class="mb-3 col-md-6">
                    <div class="password-container">
                        <label for="username" class="form-label">Username </label>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                            <path
                                d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                        </svg>
                        <input type="text" class="form-control" id="username" name="username"
                            aria-describedby="emailHelp">
                    </div>
                </div>

                <div class="mb-3 col-md-6">
                    
                        <label for="password" class="form-label">Password</label>
                        <span id="togglePassword" class="toggle-eye">👁️</span>
                        <input type="password" class="form-control" id="password" name="password">
                    

                </div>

                <div class="mb-3 col-md-6">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <span id="togglePassword1" class="toggle-eye1">👁️</span>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                </div>
                <button type="submit" class="btn btn-primary  col-md-5">SignUp</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <!-- Font Awesome (for user icon) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script>
        var typed = new Typed('#h1', {
            strings: ['Signup To Our Website'],
            typeSpeed: 70,
            loop: true,
            showCursor: false
        });

        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('togglePassword');

        toggleIcon.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            // Change the icon (optional)
            toggleIcon.textContent = isPassword ? '🙈' : '👁️';
        });

        const passwordInput1 = document.getElementById("cpassword");
        const toggleIcon1 = document.getElementById("togglePassword1");

        toggleIcon1.addEventListener('click', function () {
            const isPasswords = passwordInput1.type === 'password';
            passwordInput1.type = isPasswords ? 'text' : 'password';
            toggleIcon1.textContent = isPasswords ? '🙈' : '👁️';
        });

    </script>
</body>

</html>