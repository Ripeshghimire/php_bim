<?php

/* levels of errors:

        a) Warning: 
                -> The operation performed on the variables are executed.
                -> It returns the warning information.
                -> Line's of code are also executed after warning error.
                
        b) Parse Error: 
                -> The operation performed on the variables are not executed. 
                -> Parse information are encountered in case of misused or misspelled
                   or missing symbols.
                -> Line's of code are not executed after parse error.
        
        c) Error: 
                -> No line's of code will be executed before and after the error.
                -> It returns the syntax error. If semicolon is missing.
 */


echo "<br>";

$a = 10;

// $b = "10asasa"; //returns warning error 
// $b = "asasa10"; // returns Fatal error or error

/* $c = $a + $b;

echo $c;

echo "<br>";

echo "abc"; */