<?php
class emp{
    public $name;
    public $salary;
    // default constructor
    // function __construct(){
    //     echo "this is my construct for emp!";
    // }

    // constructor with arguments ;
    function  __construct($name,$sal){
     $this->name = $name;
     $this->salary = $sal;
    }
}

$v = new emp("vinay",3434); 

echo "The first emp name is " . $v->name . "<br>";
echo "Salary is " . $v->salary;
 
?>