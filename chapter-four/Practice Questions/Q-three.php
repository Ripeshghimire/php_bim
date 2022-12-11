<?php

/* Q. Create a numeric array called $months that contains the 
      months of the year. 
*/

//Wrong Approach
$months[] = 'January';
$months[] = 'February';
$months[] = 'March';
$months[] = 'April';
$months[] = 'May';
$months[] = 'June';
$months[] = 'July';
$months[] = 'August';
$months[] = 'September';
$months[] = 'October';
$months[] = 'November';
$months[] = 'December';

//Right Approach
$month = array(
    'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
    'September', 'October', 'November', 'December'
);