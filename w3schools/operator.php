<?php
// Arithmetic Operators
$x = 2 ; 
$y = 1;
echo $x + $y;
echo $x - $y;
echo $x / $y;
echo $x * $y;
echo $x % $y;
echo $x ** $y;

//Assignment Operators
$x += $y;
$x -= $y;
$x *= $y;
$x /= $y;
$x %= $y;
$x = $y;

//Comparison Operators
$x == $y;	//eturns true if $x is equal to $y
$x === $y;	//Returns true if $x is equal to $y, and they are of the same type
$x != $y;	//Returns true if $x is not equal to $y
$x <> $y;	//Returns true if $x is not equal to $y
$x !== $y;	//Returns true if $x is not equal to $y, or they are not of the same type
$x > $y;	    //Returns true if $x is greater than $y
$x < $y;   //Returns true if $x is less than $y
$x >= $y;	//Returns true if $x is greater than or equal to $y
$x <= $y;	//Returns true if $x is less than or equal to $y
$x <=> $y;	//Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y.

//Increment / Decrement Operators
++$x;	//Pre-increment
$x++;	//Post-increment
--$x;	//Pre-decrement
$x--;	//Post-decrement

//Logical Operators
$x and $y;	//True if both $x and $y are true
$x or $y;	//True if either $x or $y is true
$x xor $y;	//True if either $x or $y is true, but not both
$x && $y;	//True if both $x and $y are true
$x || $y;	//True if either $x or $y is true
!$x;	        //True if $x is not true

//String Operators
$txt1 . $txt2;	//Concatenation of $txt1 and $txt2
$txt1 .= $txt2;	//Appends $txt2 to $txt1

//Array Operators
$x + $y;   //Union of $x and $y
$x == $y;	//Returns true if $x and $y have the same key/value pairs
$x === $y;	//Returns true if $x and $y have the same key/value pairs in the same order and of the same types
$x != $y;	//Returns true if $x is not equal to $y
$x <> $y;	//Returns true if $x is not equal to $y
$x !== $y;	//Returns true if $x is not identical to $y

//Conditional Assignment Operators
$x = expr1 ? expr2 : expr3;	//Returns the value of $x.
//The value of $x is expr2 if expr1 = TRUE.
//The value of $x is expr3 if expr1 = FALSE

$x = expr1 ?? expr2	//Returns the value of $x.
//The value of $x is expr1 if expr1 exists, and is not NULL.
//If expr1 does not exist, or is NULL, the value of $x is expr2.


?>