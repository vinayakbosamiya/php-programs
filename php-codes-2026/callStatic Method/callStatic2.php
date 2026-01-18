<?php

class stud{
    private static function display($val){
        echo "this is display method & value is : $val";
    }

    public static function __callStatic($method,$args){
        // __CLASS__ is fetch the class name from where exists inside any class 
        // in this below fetch stud class name
        if(method_exists(__CLASS__,$method)){
            call_user_func_array([__CLASS__,$method],$args);
        }
    }
}

stud::display("php");
?>