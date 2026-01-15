<?php
class base{
    public static $name = "mohit";
    public static function  show(){
        echo self::$name;
    }

    function __construct($n){
        
        self::$name = $n;
        /* note :- 2 method are available that below is available only use one not use both */
        self::show();
        // base::show();
        
    }
}

// echo base::$name;
// base::show();

$t = new base("wow");
// $t->show();

?>