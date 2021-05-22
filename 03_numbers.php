<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations

echo $a + $b . "<br>";
echo $a - $b . "<br>";
echo $a * $b . "<br>";
echo $a / $b . "<br>";
echo $a % $b . "<br>";

// Assignment with math operators

$a += $b;   // $a = $a + $b
echo $a . "<br>";

$a -= $b;  // $a = $a - $b
echo $a . "<br>";

$a *= $b;   // $a = $a * $b
echo $a . "<br>";

$a /= $b;    // $a = $a / $b
echo $a . "<br>";

$a %= $b;   // $a = $a % $b
echo $a . "<br>";

// Increment operator

echo ++$a . "<br>";  // pre-increment

echo $a++ . "<br>";  // post-increment

// Decrement operator

echo --$a . "<br>";  // pre-decrement

echo $a-- . "<br>";  // post-decrement

// Number checking functions

is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion

$strNumber = "12.34";

$number = floatval($strNumber);
var_dump($number);

// otherwise

$number = (float)$strNumber;
var_dump($number);


$number = intval($strNumber);
var_dump($number);

// otherwise

$number = (int)$strNumber;
var_dump($number);

// Number functions

echo abs(-15) . "<br>";
echo pow(2, 3) . "<br>";
echo sqrt(16) . "<br>";
echo max(2, 3) . "<br>";
echo min(2, 3) . "<br>";
echo round(2.4) . "<br>";
echo round(2.6) . "<br>";
echo floor(2.6) . "<br>";
echo ceil(2.6) . "<br>";

// Formatting numbers

$number = 12345678.123456;
echo number_format($number, 2, ',', ' ');    // number_format(number,decimals,decimalpoint,separator) 

// https://www.php.net/manual/en/ref.math.php
