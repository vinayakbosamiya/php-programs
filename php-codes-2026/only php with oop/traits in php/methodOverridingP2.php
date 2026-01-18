<?php
//  use method overriding with users dependencies or user decisions method call 
trait h{
    public function hello(){
        echo "hello come from ' hello ' trait !<br>";
    } 
}
trait hi{
    public function hello(){
        echo "hello come from ' hi ' trait !<br>";
    } 
}
class base{
 
    use hi,h{
        h::hello insteadof hi;
        hi::hello as newHi;
    }
}

 


$obj = new base();
$obj->hello();
$obj->newHi();
 
 
?>