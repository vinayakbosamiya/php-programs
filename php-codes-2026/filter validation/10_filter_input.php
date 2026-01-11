<?php

// filter_input(type,variable,    filter,option);
/*              input_get,    
                input_post,
                input_cookie,
                input_server,
                input_env,
*/

if(isset($_REQUEST['submit'])){
    $var =  filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    if($var){
        echo "$var email is valid";
    }else{
        echo "$var email is not valid";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter_input</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
email: <input type="text" name="email" autocomplete="off">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>