<?php
class abc{
public $data = ["name"=>"ex1","whose"=>"php","quelity"=>"best"];
public function __get($key){
   if(array_key_exists($key,$this->data)){
    return $this->data[$key];
   }else{
    return "this $key key is not exixts";
   }
}
}

$test1 = new abc();
echo $test1->fee;

?>

