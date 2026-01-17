<?php
class school{
    public function getNames(stud $nm){
        foreach($nm->Names() as $n){
            echo $n."<br>";
        }
    }
}

class stud{
    public function Names(){
        return ["rohan","mohit","mayur"];
    }
}

$sc = new school();
$st = new stud();
$sc->getNames($st)



?>