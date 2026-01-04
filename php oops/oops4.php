<?php
class emp{
   private $name = "vinay";

    function showname(){
        echo $this->name;
    }
}

$v = new emp();
$v->showname();

?>