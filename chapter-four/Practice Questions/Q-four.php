<?php

/* Q. Use array() to create an associative array of months and 
      the number of days in each month and display the $months array. 
*/

$months = array(
    'January' => 31,
    'February' => 28,
    'March' => 31,
    'April' => 30,
    'May' => 31,
    'June' => 30,
    'July' => 31,
    'August' => 31,
    'September' => 30,
    'October' => 31,
    'November' => 30,
    'December' => 31
);

foreach ($months as $key => $value) {
    echo "$key : $value" . "<br>";
}