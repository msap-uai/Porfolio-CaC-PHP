<?php

//constante de varables
define("GREETING", "Welcome to W3Schools.com!");// constants are automatically global across the entire script.
//define(name, value, case-insensitive)
echo GREETING;

//constante de array
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
function autos(){
    echo cars;
}

echo cars[0];

?>