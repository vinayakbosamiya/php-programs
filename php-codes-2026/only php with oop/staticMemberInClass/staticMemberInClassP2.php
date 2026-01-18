<?php
class base{
    public static $name = "example";
    public static function  show(){
        echo self::$name;
    }

}

class derived extends base{
public static function show(){
    echo parent::$name;
}
}

$t = new derived();
$t->show();

?>