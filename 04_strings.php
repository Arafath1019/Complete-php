<?php

// Create simple string

$string = 'Hello Yeasin';
$string2 = "Hello Arafath";
echo $string . "<br>";
echo $string2 . "<br>";

$name = 'Yeasin';
$age = 23;

echo 'Hello ' . $name . ' I am ' . $age . 'years old' . "<br>";
echo "Hello " . $name . " I am " . $age . "years old" . "<br>";

echo "Hello $name I am $age years old" . "<br>";

// String concatenation

echo "Hello " . "Yeasin Arafath" . " I am 23 years old" . "<br>";

// String functions

$string = "     Hello World     ";

echo strlen($string) . "<br>";
echo trim($string) . "<br>";
echo ltrim($string) . "<br>";
echo rtrim($string) . "<br>";
echo str_word_count($string) . "<br>";
echo strrev($string) . "<br>";
echo strtoupper($string) . "<br>";
echo strtolower($string) . "<br>";
echo ucfirst('hello') . "<br>";
echo lcfirst('HELLO') . "<br>";
echo ucwords('hello word') . "<br>";
echo strpos($string, 'world') . "<br>";
echo stripos($string, 'world') . "<br>";
echo substr($string, 8, 12) . "<br>";
echo str_replace('World', 'PHP', $string) . "<br>";
echo str_ireplace('world', 'PHP', $string) . "<br>";

// Multiline text and line breaks

$longText = "
    Hello, my name is <b>Zura</b>
    I am <b>27</b>,
    I love my daughter
";

echo $longText . "<br>";
echo nl2br($longText) . "<br>";

// Multiline text and reserve html tags

$longText = "
    Hello, my name is <b>Zura</b>
    I am <b>27</b>,
    I love my daughter
";

echo $longText . "<br>";
echo nl2br($longText) . "<br>";
echo htmlentities($longText) . "<br>";
echo nl2br(htmlentities($longText)) . "<br>";

echo html_entity_decode('&lt;b&gt;Zura&lt;/b&gt;') . "<br>";

// https://www.php.net/manual/en/ref.strings.php