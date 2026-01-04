<?php
class emp{
    public $name;
    public $sal;

    function __construct($n,$s)
    {
        $this->name = $n;
        $this->sal = $s;
    }
    
    function __destruct()
    {
        echo "<br>I am destructor ".$this->name."! <br>";
    }
};
$v = new emp("mahir",3434); 
$i = new emp("rahul",3545); 

echo "<br>The first emp name is " . $v->name . "<br>";
echo "Salary is " . $v->sal;

echo "<br>The second emp name is " . $i->name . "<br>";
echo "Salary is " . $i->sal;
?>
