<?php
echo "local & global variable in php.<br>";
/*

 1 - you can use the gloabal variable inside the function but you must be use (global)  keyword inside the function because global variable is declare outside of the function so that you can use global keyword inside the function you can use it.
 2 -  you are not use local variable because local variable is declare inside the function so that local variable is used only inside the function
 
 simple meaning of local variable :- this variable declare inside of the function
 simple meaning of global variable :- this variable declare outside of the function

 */

$b = 21; // global
echo "it is global variable = ",$b; 

function get()
{
    $a = 18; //  local 
    echo "<br>";
    echo "it is local variable = ",$a;
    echo "<br>";
    global $b;
    echo "it is global variable inside the function = ",$b;
}
echo "<br>";
echo "<br>";
echo "<br>";
var_dump("it is globals",$GLOBALS);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump("it is globals value using global keyword",$GLOBALS["b"]);
echo "<br>";
echo "<br>";

get();
?>