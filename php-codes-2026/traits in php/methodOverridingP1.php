<?php
// method overriding with traits
trait h{
    public function hello(){
        echo "hello come from trait !";
    } 
}
class base{
 
    public function hello(){
        echo "hello come from base class !";
    } 
}

class child extends base{
   use h;
    public function hello(){
        echo "hello come from child class !";
    } 
};


$obj = new child();
$obj->hello();
 
 
?>