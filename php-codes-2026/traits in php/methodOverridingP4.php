<?php
// use with private method
trait h{
    private function hello(){
        echo "hello come from ' hello ' trait with new name !<br>";
    } 
}
 
class base{
    use h{

        h::hello as public newHello;
    }
}

 


$obj = new base();
$obj->newHello();
 
?>