<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get and post method</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <form action="getAndPost.php" method="post">
    <!-- <form action="getAndPost.php" method="get"> -->
        <label for="email1">email</label>
        <input type="email" name="email1"> <br>
        <label for="password">password</label>
        <input type="password" name="password">
       <button >submit</button>
        <input type="reset" value="reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email1"];
        $pass = $_POST["password"];
        echo '<div class="alert alert-primary" role="alert">
  this is email - ' . $email . ' and this is password = ' . $pass . ' of this email;
</div>';
    }
//     else if ($_SERVER["REQUEST_METHOD"] == "GET")  // ✅ Corrected condition
//     {
       
// echo "<script>

// $(document).ready(function(){
//   $('button').click(function(){
//     $(console.log('email = ".$email."');
//     $(console.log('password = ".$pass."');
//   });
// });
// </script>";
//     }
    

    ?>


</body>

</html>