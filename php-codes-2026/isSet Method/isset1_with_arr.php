<?php
class stud{
    public $lang;
    private $first_name;
    private $last_name;
    private $detail = ['name'=>'test name','lang'=>'php'];


    public function set($f,$l){
        $this->first_name=$f;
        $this->last_name=$l;
    }
    // this method is used to check private property is set or not inside the class and this property must be use inside the class
    public function __isset($name)
    {
        echo isset($this->detail[$name]);        
    }
}
$test = new stud();
// $test->lang = "php";
$test->set("php","codes");
// Note:- when use __isset magic method use must be write below line because below line will call "__isset" magic method
echo isset($test->name);
?>