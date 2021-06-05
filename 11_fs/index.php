<?php
// Magic constants
echo __DIR__ . "<br>";
echo __FILE__ . "<br>";
echo __LINE__ . "<br>";

// Create directory
mkdir('test');

// Rename directory
rename('test', 'test2');

// Delete directory
rmdir('test2');

// Read files and folders inside directory
echo scandir('./');

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');

file_put_contents('sample.txt', 'some content');

// file_get_contents from URL
$userJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo json_decode($userJson);

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
echo file_exists('sample.txt');
echo is_dir('test');
// is_dir
// filemtime
// filesize
// disk_free_space
// file