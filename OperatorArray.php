<?php

$first = [
    "first_name" => "Hilman"
];

$last = [
    "last_name" => "Fauzi"
];

//operasi menggabungkan dua buah array
$full = $first + $last;

var_dump($full);


$a = [
    "first_name" => "Hilman",
    "last_name" => "Fauzi"
];

$b = [
    "last_name" => "Fauzi",
    "first_name" => "Hilman"
];

var_dump($a == $b);
var_dump($a === $b);
