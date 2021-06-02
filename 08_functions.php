<?php

// Function which prints "Hello I am Zura"

function hello()
{
    echo "hello I am Yeasin Arafath";
}

hello();

// Function with argument

function name($name)
{
    echo "Hello I am $name";
}

name("Yeasin");

// Create sum of two functions

function sum($a, $b)
{
    return $a + $b;
}

echo sum(4, 5);

// Create function to sum all numbers using ...$nums

function nums(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }

    return $sum;
}

echo nums(1, 2, 3, 4, 5, 6);

// Arrow functions

// 'fn' keyword is used for arrow function in PHP.
// Syntax:
// fn(argument) => expression to be returned

$str = "Hello";

$my_function = fn ($a) => $str . " " . $a;

echo $my_function("World");
