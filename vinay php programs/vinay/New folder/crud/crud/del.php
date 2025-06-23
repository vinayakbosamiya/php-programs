<?php
$id = $_GET['id'];
$con = mysqli_connect("localhost", "root", "", "divA");
$sql = "delete from emp where id='$id'";
$res = mysqli_query($con, $sql);
header("location:form.php");
?>