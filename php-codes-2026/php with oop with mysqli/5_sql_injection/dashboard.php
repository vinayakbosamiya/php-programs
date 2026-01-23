<?php
session_start();
echo "welcome " . $_SESSION['first_name'];

?><br>
<a href="logout.php">Logout</a>
