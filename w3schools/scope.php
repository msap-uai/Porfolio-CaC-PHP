<?php
$x = 5; // global scope

function myTest() {
    $x= 6; // local scope solo se accede desde el interior de la variable
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();
echo "<p>Variable x outside function is: $x</p>";


function myTest2() {
  global $x += 2; // permite acceder a variables globales
}
myTest2();

// las variables globales estan todas en un array llamado $GLOBALS[name_variable]

function myTest3() {
    $GLOBALS['x'];
}

//las variables dentro de una funcion son eliminadas tras su ejecucion.
//cuando queremos evitar eso se usa static
function myTest4() {
    static $x = 0;
    echo $x;
    $x++;
}
myTest4();

?>