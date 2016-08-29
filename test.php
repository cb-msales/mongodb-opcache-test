<?php

require __DIR__ . '/vendor/autoload.php';

$test = ['test' => ['$in' => [10, 12]]];

phpinfo();
$manager = new MongoDB\Driver\Manager("mongodb://localhost");

$client = new MongoDB\Client();
$client->selectCollection('a','b')->find($test);

file_put_contents('/tmp/mongodb-errors.log', (int)(serialize($test) == 'a:1:{s:4:"test";a:1:{s:3:"$in";a:2:{i:0;i:10;i:1;i:12;}}}'), FILE_APPEND);