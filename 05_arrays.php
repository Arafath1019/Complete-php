<?php

// Create array

$fruits = array("Banana", "Apple", "Orange");

// otherwise

$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array

var_dump($fruits);

//otherwise

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Get element by index

echo $fruits[1] . "<br>";

// Set element by index

$fruits[0] = "Peach";

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array has element at index 2

isset($fruits[2]); // true

// Append element

$fruits[] = "Banana";

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the length of the array

echo count($fruits) . "<br>";

// Add element at the end of the array

array_push($fruits, 'foo');

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the end of the array

echo array_pop($fruits);

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array

array_unshift($fruits, "bar");

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the beginning of the array

echo array_shift($fruits);

// Split the string into an array

$string = "Banana,Apple,Peach";

echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";

// Combine array elements into string

echo implode("&", $fruits);

// Check if element exist in the array

echo "<pre>";
var_dump(in_array("Mango", $fruits));
echo "</pre>";

// Search element index in the array

echo "<pre>";
var_dump(array_search("Apple", $fruits));
echo "</pre>";

// Merge two arrays

$vegetables = ["Potato", "Cucumber"];
echo "<pre>";
var_dump(array_merge($fruits, $vegetables));
echo "</pre>";


//otherwise

echo "<pre>";
var_dump([...$fruits, ...$vegetables]);
echo "</pre>";

// Sorting of array 

sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Sorting of array in reversed order

echo "<pre>";
var_dump(rsort($fruits));
echo "</pre>";

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobies' => ['Tannis', 'Video Games']
];

echo "<pre>";
var_dump($person);
echo "</pre>";

echo "<pre>";
print_r($person);
echo "</pre>";

// Get element by key

echo $person['name'] . "<br>";

// Set element by key

$person['channel'] = 'TraversyMedia';

echo "<pre>";
var_dump($person);
echo "</pre>";

// Null coalescing assignment operator. Since PHP 7.4

// (in previous php cersion)

if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

echo "<pre>";
var_dump($person);
echo "</pre>";

// (from php 7.4 it seems like)

$person['address'] = $person['address'] ?? 'unknown';

echo "<pre>";
var_dump($person);
echo "</pre>";

// Check if array has specific key

// Print the keys of the array

echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";

// Print the values of the array

echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sorting associative arrays by keys

ksort($person);
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sorting associative arrays by values

asort($person);
echo "<pre>";
var_dump($person);
echo "</pre>";

// Two dimensional arrays

$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false]
];

echo "<pre>";
var_dump($todos);
echo "</pre>";
