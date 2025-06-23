<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "divA");
$sql = "select * from emp where id='$id'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);
?>
<form action="update.php" method="post">
<input type="hidden" name="id" value="<?= $row['id']; ?>"><br><br>
<input type="text" name="nm" value="<?= $row['name']; ?>" placeholder="NAME"><br><br>
<input type="email" name="eml" value="<?= $row['email']; ?>"
placeholder="EMAIL"><br><br>
<input type="submit" value="UPDATE">
</form>