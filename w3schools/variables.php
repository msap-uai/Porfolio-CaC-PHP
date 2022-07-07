<!DOCTYPE html>
<html>
<body>
<!-- esto es un comentario en HTML-->

<?php
//declarar variable
$string = ¨HOLA¨; //el tipo se asigna automaticamente
$int = 5;
$float = 0.5;
$bool = true;


$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is  $COLOR.¨ <br>"; //se puede referenciar directamente
echo ¨cinco por dos es¨ . $int*2; // se pude generar operaciones


//STRINGS
$string = "Hello world!";

echo strlen($string); // cantidad de caraccteres, outputs 12
echo str_word_count($string); // cantidad de palabras
echo strrev($string); //invierte el orden
echo strpos($string, ¨rl¨); //busca caracteres
echo str_replace(¨world¨, ¨PHP¨,$string);
//https://www.w3schools.com/php/php_ref_string.asp


//FUNCIONES NUMERICAS
$x = 6;

is_numeric($x);
is_int($x);
is_integer($x);
is_long($x);
is_float($x);
is_double($x);
is_finite($x);
is_infinite($x);
is_nan($x);

//CASTING

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;

//MATH FUNCTIONS
echo(pi()); // returns 3.1415926535898
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150
echo(abs(-6.7));  // returns 6.7
echo(sqrt(64));  // returns 8
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0
echo(rand()); //random
echo(rand(10, 100)); //random entre




var_dump($int); // devuelve el tipo de variable

$cars = array("Volvo","BMW","Toyota");//array

//VARIABLES POO tipo OBJECT
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
$myCar = new Car("black", "Volvo");
echo $myCar -> message();

//VALOR NULO o sin valor
$x = null;

//resource

?>

</body>
</html>