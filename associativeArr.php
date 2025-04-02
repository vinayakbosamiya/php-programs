<?php

$arr = array( "rahul"=> "red",
             "vinay" => "skyblue",
            "mahesh" => "brown",
            "shahil" => "green");
// // // 1 - it is first method to print array;
// echo $arr["rahul"]."<br>";
// echo $arr["vinay"]."<br>";

// // // 2 - it is second method to print arrry;
foreach ($arr as $key => $value) {
    echo "$key => $value.<br>";
}

// // // 3 - it is third method to print array;
// print_r($arr)

// // // 4 - it is forth method to print array;
// var_dump($arr)
?>