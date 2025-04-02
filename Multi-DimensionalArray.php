<?php 
// metrix 
// it is Multi-DimensionalArray with example

$arr= array(
                    array(1,2,3,4,5),   
                    array(6,7,8,9,10),  
                    array(1,2,3,4,5), 
                );

                for($i=0;$i<count($arr);$i++)
                {
                    for ($j=0; $j < count($arr[$i]); $j++) { 
                        echo $arr[$i][$j];
                        echo " ";
                    }
                    echo "<br>";
                }

?>
