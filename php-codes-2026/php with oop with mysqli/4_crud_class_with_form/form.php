<?php
include 'db.php';
$obj = new database();

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="savedata.php" method="post">
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" required><br><br>
        
        <label for="Age">Age:</label>
        <input type="text" id="Age" name="Age" required><br><br>

        <label for="Name">City:</label>
        <select name="city" id="city">
        <?php
        $obj->select('citydb');
        $result = $obj->getRes();
        foreach ($result as list('id'=>$id,"cname"=>$cname)) {
            
            echo "<option value='$id'>$cname</option>";
        }
        ?>
        </select>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>