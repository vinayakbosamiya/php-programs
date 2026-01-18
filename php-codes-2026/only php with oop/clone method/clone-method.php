<?php
class stud{
    public $name;
    public $lang;
    public function __construct($n){
        $this->name = $n;
    }
}
// "$stud2 = $stud1; " when write this line in oop it means copy by reference of object 
// "$stud2 = clone $stud1;"  when write this line means copy by value of object in oop;
// this code work for copy value of obj but if inside the class available another's class object then it not work so that go to clone-method1.php
$stud1 = new stud("php codes");
$stud2 = clone $stud1;
echo $stud1->name;
echo "<br>";
$stud2->name = "php";
echo $stud2->name;

?>