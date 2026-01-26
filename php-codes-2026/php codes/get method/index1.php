<?php
class abc{
private $name = "example";
public function __get($property){
    echo "this property($property) is private or not available";
}
}

$test = new abc();
$test->name;
?>