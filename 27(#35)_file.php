<?php
$file = fopen("example.txt","r");
// you can pass the number of charachter eithor or filesize("example.txt")
// filesize("example.txt") is take of full file text 
$con =  fread($file,filesize("example.txt")); 
echo $con;
fclose($file);

?>