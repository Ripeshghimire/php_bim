<?php

/* 
    a) Changing Case: 
        -> strtolower()
        -> strtoupper()

    b) Prettifying Name:
        -> ucwords()
        -> ucfirst()
        -> lcfirst()

    c) Substring: 
        -> Truncating With substr()
        -> Extracting the end of string substr()
        -> Using str_replace()

  */


/* Try on your own for Changing case and Prettifying Name as it has already been discussed in class */

// Syntax: substr(string, start/offset, length)

// $str = "Floccinaucinihilipilification";

/* $str = "Hello";

echo substr($str, 0, 4); */


// echo lcfirst("hello world nepal");


/* string replace method */

// Syntax: str_replace(search/needle, replace, subject/string/haystack, count)
/* 
$str = "Kist college";
echo str_replace("Kist", "Ncit", $str, $i);
echo "<br>";
echo  "The number of replacement is: $i"; */

/* $sentence = "We live in an age where unnecessary things are only our necessities.";

$old = array("age", "unnecessary", "necessities");
$new = array("era", "necessary", "unnecessities");

$newSentence = str_replace($old, $new, $sentence, $count);
echo $newSentence;
echo "<br>";
echo "The number of replacements is: $count"; */