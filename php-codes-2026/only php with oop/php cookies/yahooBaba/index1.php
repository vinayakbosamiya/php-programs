<?php
$cookie_name = "users";
$cookie_val = "books";
// set the cookie
setcookie($cookie_name,$cookie_val,time() + (10),"/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
    if(!isset( $_COOKIE[$cookie_name])){
        echo "cookie is not set or removed the cookie";
    }
    else{
        
        echo $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>