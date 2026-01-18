<?php
class obj{
    // this method use when access object directly show professional message
    public function __toString(){
        return "you can't use or print object directly : ".get_class($this);
    }
}
$t= new obj();
echo $t;    

?>