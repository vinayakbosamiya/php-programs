<?php
// require "files/first.php";
// require "files/second.php"; instead this method use this "spl_autoload_register" function 

// Note:- when use this "spl_autoload_register" that is load other file and that file's object and file name and class name must be same as 
spl_autoload_register(function ($file)// remove autoload function use 'spl_autoload_register' this function 
{
require "files/".$file.".php";
});

$first = new first();
$second = new second();
?>