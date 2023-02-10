<?php

$name = "Hilman Fauzi Abdilah";

echo "Nama : " . $name . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;

//konversi
$valuetoString = (string)100;
var_dump($valuetoString);

$valuetoInt = (int)"1000";
var_dump($valuetoInt);

$valuetoFloat = (float)"manusia"; //salah akan menghasilkan nilai 0
var_dump($valuetoFloat);

$name = "iif";

echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
//echo $name[3] . PHP_EOL; //error

echo "Hello $name, Selamat belajar PHP" . PHP_EOL;

$var = "angle";
echo "This is {$var}s" . PHP_EOL;


