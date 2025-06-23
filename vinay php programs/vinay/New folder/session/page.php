<?php
session_start();
if(!isset($_SESSION['mobile']))
{
    header("location:login.php");
}
?>
<h1>welcom,<?= $_SESSION['mobile'];?></h1>
<a href="logout.php">logout</a>