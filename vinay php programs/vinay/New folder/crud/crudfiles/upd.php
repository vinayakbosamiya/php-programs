<?php

    $id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","note");
$sql = "SELECT * FROM `newnotes` WHERE `id` = $id";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

?>



<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?=$row[`id`];?>"><br><br>
    <input type="text" name="fn" id="fn" value="<?=$row['firstname'];?>" placeholder="FirstName"><br><br>
    <input type="text" name="ln" id="ln" value="<?=$row['lastname'];?>" placeholder="LastName"><br><br>
    <input type="submit" value="submit">
</form>