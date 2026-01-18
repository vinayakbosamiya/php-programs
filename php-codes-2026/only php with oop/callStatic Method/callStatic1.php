<?php

class stud{
    private static function display(){
        echo "this is display method";
    }

    public static function __callStatic($method,$args){
        echo "this method($method) is private or not exist!<br>";
    }
}

stud::display();
?>