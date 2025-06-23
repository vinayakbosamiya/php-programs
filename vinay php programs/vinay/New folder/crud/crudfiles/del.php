<?php
$id = $_GET['id'];
$conn = mysqli_connect("localhost","root","","note");
$sql = "DELETE FROM `newnotes` WHERE `id` = $id";
 $res = mysqli_query($conn, $sql);
 header("location:form.php");


?>