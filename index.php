<?php

// Difference between $ and $$ 

// $ => Simple Variavle:
$simple = "It is a simple variable. and it is very simple </br></br>";

// $$ => Reference Variable
$reference = "simple";

echo $$reference;


// Difference between echo and print

echo "This is printed by echo. It is faster then print. </br>";



print "This is printed by print It is slower then echo.";

$x = 8;
$y = 8.0;
echo ($x === $y);
?>