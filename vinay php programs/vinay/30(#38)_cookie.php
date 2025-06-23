<?php
$co = setcookie("category","gaming",time()+10,"/");
if($co){

    echo "cookie is set now";
}
?>