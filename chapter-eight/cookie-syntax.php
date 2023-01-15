<?php
//Creating a cookie
$cookie_name = "name";
$cookie_value = "Thames College";

setcookie($cookie_name, $cookie_value, time() + 20, "/");

//Accessing cookie value
echo $_COOKIE['name'];

//Deleting a cookie value
setcookie($cookie_name, '', time() - 1, "/");