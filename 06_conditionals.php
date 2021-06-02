<?php

$age = 20;
$salary = 300000;

// Sample if

if ($age === 20) {
    echo '1';
}

// Without circle braces

if ($age === 20) echo '1';

// Sample if-else

if ($age > 20) {
    echo '1';
} else {
    echo '2';
}

// Difference between == and ===

// '==' is called equal and '===' is called identical.
// The difference between '==' and '===' operator is that, '==' shpuld be used to check if the values of the two operands are equal or not.
// On the other hand. '===' checks the values as well as the data type of operands.

// if AND

if ($age > 20 && $salary === 300000) {
    echo 'Do Something';
}

// if OR

if ($age > 20 || $salary === 300000) {
    echo "Do Something";
}

// Ternary if

echo $age > 20 ? "Young" : "Old";

// Short ternary

$myAge = $age ?: 18;

// Null coalescing operator

$myName = isset($name) ? $name : "Arafath";

$myName = $name ?? "Arafath";

// switch

$userRole = "admin";

switch ($userRole) {
    case 'admin':
        echo 'Admin';
        break;
    case 'editor':
        echo "Editor";
        break;
    case 'user':
        echo "User";
        break;
    default:
        echo "Invalid role";
}
