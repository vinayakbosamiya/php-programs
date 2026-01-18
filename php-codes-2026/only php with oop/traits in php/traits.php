<?php
trait h{
    public function hello(){
        echo "hello world";
    } 
}
class base{
    use h;
}
class child{
    use h;
}


$obj = new base();
$objj = new child();
$obj->hello();
// $objj->hello();
?>