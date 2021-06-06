<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.

$resources = curl_init($url);
curl_setopt($resources, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resources);
echo $result;
$info = curl_getinfo($resources);
echo $info;
$code = curl_getinfo($resources, CURLINFO_HTTP_CODE);
echo $code;

curl_close($resources);

// Get response status code

// set_opt_array

// Post request

$user = [
    'name' => 'John Doe',
    'username' => 'John',
    'email' => 'john@example.com'
];

$resource = curl_init();

curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type : application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);

echo $result;
