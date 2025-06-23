<?php 

// function sums($value){

//     $sum = 0;
//     // use foreach loop

// //    foreach ($value as $v) {
// //     $sum += $v;
// //    }

// // use forloop

// for($i=0; $i < count($value); $i++)
// {
//     $sum = $sum + $value[$i];
// }
// return $sum;
// }
// $arrr = [1,2,3,4,5,6];
// $a = sums($arrr);
// echo $a;
 function avgs($avg)
 {
    $i=0;
    $sum = 0;
    for($i;$i< count($avg);$i++)
    {
        $sum += $avg[$i];
    }
    return $sum/$i;
 }

 $av = avgs([40,80,90,70,60]);
 echo $av;
 ?>
