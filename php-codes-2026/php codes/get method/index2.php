<?php
class abc{
public $name = ["name"=>"ex1","whose"=>"php","quelity"=>"best"];
public function __get($property){
    echo "this property($property) is private or not available";
}
}

$test1 = new abc();
print_r($test1->name);

?>

