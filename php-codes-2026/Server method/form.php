<?php
 
var_dump(isset($a));
echo "<pre>";
// print_r($_POST);
print_r($_REQUEST);
echo "</pre>";

echo "<pre>";
// print_r($_POST);
print_r($_SERVER);
echo "</pre>";

echo $_SERVER['SERVER_PORT'];
echo $_SERVER['SERVER_NAME'];


?>