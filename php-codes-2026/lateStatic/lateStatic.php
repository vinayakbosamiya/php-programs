<?php
 class base{
    protected static $name = "php";

    public function show(){
        echo static::$name;
    }
 }

 class derived extends base{
    protected static $name = "php & oop";
 }

 $t = new derived();
 $t->show();    

?>