<?php
require 'product.php';
require 'testing.php';


function wow(){
    echo "wow from index file !";
}

$test = new p\product();
$test = new test\testing();

?>