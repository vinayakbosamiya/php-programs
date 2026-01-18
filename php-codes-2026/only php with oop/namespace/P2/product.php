<?php
namespace p;

use test\testing;
class product{
    public function __construct(){
        //must be use backSlash when create obj inside class of another's file of class and in this below created obj of another's file class
        // note:- when create object of another's file class must be use backSlash 
        $newTest = new \test\testing; 
    }
}

function wow(){
    echo "wow this is best product !";
}

?>