<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1, 'meow', true, [1, 2, 3]];
$test = [
    'name' => 'svenw',
    'age' => 18,
    69,
    'meow',
    true,
    100 => 'lol',
    'boobs',
];
var_dump($test['name']);
array_push($test, 'added', 'nya', 21);
$test[] = 'maow';
var_dump($test);
?>