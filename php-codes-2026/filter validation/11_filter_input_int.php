<?php

// filter_input(type,variable,    filter,option);
/*              input_get,    
                input_post,
                input_cookie,
                input_server,
                input_env,
*/

if(isset($_REQUEST['submit'])){
    $options = array(
        "option"=>array(
             "min_range"=>1,
             "max_range"=>100,
        )
        );
    $var =  filter_input(INPUT_POST,"marks",FILTER_VALIDATE_INT,$options);
    if($var){
        echo "$var Marks is valid";
    }else{
        echo "$var Marks is not valid";

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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
Marks: <input type="text" name="marks" autocomplete="off">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>