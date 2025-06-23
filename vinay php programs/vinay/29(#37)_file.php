<?php
$a = fopen("29(#37)_file.txt","a"); // it is append mode 
fwrite($a,"this has applyed append mode.\n");

$a = fopen("29(#37)_file.txt","r"); // it is read mode 
$con = fread($a,filesize("29(#37)_file.txt"));
echo $con;








// it is write mode applyed 

/*

$a = fopen("29(#37)_file.txt","w"); // it is write mode 

fwrite($a,"this is write mode apply for this file");

$a = fopen("29(#37)_file.txt","r"); // it is as $a write mode but open for read mode

$co = fread($a,filesize("29(#37)_file.txt"));

echo $co;

fclose($a);

*/



/*

*/
?>