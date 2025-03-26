<?php
$age = readline('Enter a string: '); 
switch ($age>=18) {
    case 1:
        echo " you are aligible for vote";
        break;
    case 2:
        echo "you are aligible for recive pancard";
        break;
    default:
    echo "you are not available for pan and vote";
        break;
}
?>