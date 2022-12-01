<?php

$timezone = date_default_timezone_set('Asia/Kathmandu');

$date = date('Y-m-d h:i:s A');

$date = $date . " +7 years + 7 months + 7 days + 7 hours";
echo $date . "<br>";

$timestamp = strtotime($date); //timestamp works on the basis of base date (1970 january 1, 00:00:00)
// echo $timestamp;

$date = date('Y-m-d', $timestamp);
echo $date . "<br>";


/* Q. Wap to print this as output: 1st of December, 2022 */