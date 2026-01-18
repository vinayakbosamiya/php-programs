<?php
class stud{
    public $name;
    public $lang;
    public function __construct($n){
        $this->name = $n;
    }
    // below function used to clone the sub object of class  if below function not available then sub object is not cloned but clone main object
    public function __clone(){
        $this->lang = clone $this->lang;
    }
    public function setCourse(lang $c){
        $this->lang = $c;
    }
}


class lang{
    public $language_name;
    public function __construct($l){
        $this->language_name = $l;
    }
}
// "$stud2 = $stud1; " when write this line in oop it means copy by reference of object 
// "$stud2 = clone $stud1;"  when write this line means copy by value of object in oop;
// clone keyword is not a clone a sub object of class it clone only main object
// if you change sub object properties's value to change main object properties

$stud1 = new stud("php codes");
$language = new lang("php language");

$stud1->setCourse($language);

$stud2 = clone $stud1;

// $stud2->name='example ';
// $stud2->lang->language_name = 'python language';

print_r($stud1); echo "<br>";
print_r($stud2);
 
 
 

?>