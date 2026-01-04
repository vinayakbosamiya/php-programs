<?php

// echo "player lets play";

class player {
    public $name;
    public $speed = 3;

    function set_name($name1){
        $this->name = $name1;
    }

    function get_name(){
        return $this->name;
    }

}


$p = new player();
$p->set_name("vinay");
echo $p->get_name();
?>