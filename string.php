<?php
$name = "vinay bosamiya is good boy it is learner";
echo "it is a string length = " , strlen($name);
echo "<br>";
echo "it is a string length = " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "bosamiya");
echo "<br>";
echo str_replace( "vinay" , "krishna" ,$name);
echo "<br>";
echo str_repeat($name, 2);
echo "<br>";

echo "<pre>";
echo ltrim("                                 vinay is good boy                              ");
echo "</pre>";
echo "<br>";

echo "<pre>";
echo rtrim("                                 vinay is good boy                              ");
echo "</pre>";
echo "<br>";

echo "<pre>";
echo trim("                                 vinay is good boy                              ");
echo "</pre>";
echo "<br>";


echo "<br>";
echo "<br>";

?>