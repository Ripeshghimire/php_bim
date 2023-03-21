<?php
/* 
    Q13. Write PHP function to reverse the string (Without using built-in function)
*/

$string = "IMS College";
$length = strlen($string);
for ($i = ($length - 1); $i >= 0; $i--) {
    echo $string[$i];
}
