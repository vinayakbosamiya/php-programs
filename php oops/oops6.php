<?php
class emp{
    public $name;
    public $language;
    public $salary;

    public function __construct($name,$lang,$sal){
        $this->name = $name;
        // $this->language = $lang;
        $this->salary = $sal;
    }
    protected function print(){
        echo "The Name : ".$this->name." <br> language is : ".$this->language." <br> salary is : ".$this->salary."!";
    }

};

class programer extends emp{
        public $language ="php";
        public function __construct($name,$lang,$sal){
            $this->name = $name;
            $this->language = $lang;
            $this->salary = $sal;
            $this->print();
        }


}

$mohil = new programer("mohil","php",12000);



?>