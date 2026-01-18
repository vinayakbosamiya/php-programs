<?php
$arr= array(
    "name"=>"<h1>mohil</h1>",
    "mark"=>"65",
    "email"=>"mohil@example.com",
);
 $filter = array(
    "name"=>FILTER_SANITIZE_STRING,
    "mark"=>array(
        "filter"=>FILTER_VALIDATE_INT,
        "option"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
        ),
        "email"=>FILTER_SANITIZE_EMAIL,
    );
    echo "<pre>";
    print_r(filter_var_array($arr,$filter));
    // print_r($arr);
 
    
    echo "</pre>";
    
?>