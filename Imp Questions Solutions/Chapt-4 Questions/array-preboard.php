<?php

/* Q. Write a program in PHP to create a function that takes an array 
      as a parameter and returns the average value of that array. */

function average($arr)
{
    $sum = 0;
    $count = count($arr);
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum / $count;
}

echo average([10, 10, 10]);


/* function average($arr)
{
    return array_sum($arr) / count($arr);
}

$numbers = array(1, 2, 3, 4, 5);
$average = average($numbers);
echo $average; //3 */