<?php
/* 
    -> collection of heterogenous data type
    -> data is stored as a comma separated value and key value pairs
    -> e.g. key => value
    -> last_index = size - 1
    -> user defined data type
 */

/* two ways of defining an array */
$info = [
    "IMS College",
    "info@ims.edu.np",
    "Thapathali",
    14434178
];


// echo $info[0];

/* echo "<pre>";
print_r($info);
echo "</pre>"; */

// var_dump($info);

$info = array(
    "Kist College",
    "info@kist.edu.np",
    "Kamalpokari",
    14434178
);


/* 
   Array can be classified into two parts:

    a) Single Dimensional 
    b) Multi Dimensional

    Types of array in php:
    a) Indexive Array - Arrays with a numeric index
    b) Asscociative Array - Arrays with named keys
    c) Multi-dimensional Array - Arrays containing one or more arrays

*/

/* Indexive array or Numeric arrays */

$data = array(
    "Ram Nepali",
    "ram.nepali@gmail.com",
    "Nepal",
    988888888888
);

/* echo "<pre>";
print_r($data);
echo "</pre>"; */


/* Associative array */

$person = array(
    'name' => "Ram Nepali",
    'email' => "ram.nepali@gmail.com",
    'address' => "Nepal",
    'phone' => 988888888888
);


/* echo "<pre>";
print_r($person);
echo "</pre>";

echo $person['email']; */