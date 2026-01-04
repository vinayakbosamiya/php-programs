<?php
echo "inheritance <br>";
class emp{
    private $name = "vinay";
    private $salary = 12000;
    private $grade = 3;

    function showInfo($n){
        $this->name = $n;
        echo "The Name Is : ".$this->name."<br>";
        echo "The salary Is : ".$this->salary."<br>";
        echo "The grade Is  :  ".$this->grade."<br>";
    }
};
class programmer extends emp{
   private $language = "php";

   function set_language($language){
    $this->language = $language;
    echo "The Language Is: ".$this->language;
   }
};

$rohan = new emp();
$rohan->showInfo("rohan");
echo "<br>";
$mahesh = new programmer();
$mahesh->showInfo("mahesh");
$mahesh->set_language("python")



?>