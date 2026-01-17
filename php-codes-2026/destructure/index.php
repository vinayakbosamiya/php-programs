<?php
class abc{
    public function __construct(){
        echo "This is construct function <br>";
}
        public function second(){
            echo "This is second function <br>";
            return $this;
    }
    public function __destruct(){
        echo "This is destruct function <br>";
    }
}

$obj = new abc;
$obj->second();

?>