<?php

// while loop

$counter = 0;

while ($counter < 10) {
    echo $counter . "<br>";
    $counter++;
}

// do - while

do {
    echo $counter . "<br>";
    $counter++;
} while ($counter < 10);

// for

for ($i = 0; $i < 10; $i++) {
    echo $counter . "<br>";
}

// foreach

$fruits = ['Banana', 'Apple', 'Orange'];

foreach ($fruits as $index => $fruit) {
    echo $index . ' ' . $fruit . "<br>";
}


// Iterate Over associative array.

$person = [
    'name' => 'Yeasin Arafath',
    'surname' => 'Arafath',
    'age' => 23,
    'hobbies' => ['Video Games', 'Travelling']
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key . ' ' . implode(",", $value) . "<br>";
    } else {
        echo $key . ' ' . $value . "<br>";
    }
}
