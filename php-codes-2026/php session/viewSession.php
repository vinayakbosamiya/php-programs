<?php

session_start();
print_r($_SESSION)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view session</title>
</head>

<body>
    <?php

    echo "<br>the value of session is : ".$_SESSION['name'];
    ?>
</body>

</html>