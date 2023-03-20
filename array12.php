<?php
//write a program in php to create a function as a 
// parameter and retruns the average value 
function average ($arr){
    $sum = 0;
    $count = count($arr);
    foreach ($arr  as $value) {
        # code...
        $sum += $value ;

    }
    return $sum / $count;
}
echo average([1,2,3]);