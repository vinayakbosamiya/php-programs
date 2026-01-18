<?php
// use with private method
trait h{
    private function hello(){
        echo "hello come from ' hello ' trait !<br>";
    } 
}
 
class base{
    use h{

        h::hello as public;
    }
}

 


$obj = new base();
$obj->hello();
 
?>