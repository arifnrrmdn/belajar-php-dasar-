<?php

//anonymous function
$anonfunction = function (string $name){
    echo "Hello $name" . PHP_EOL;
};

$anonfunction("Hilman");
$anonfunction("Fauzi");

function sayGoodBye(string $name,  $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

//anonymous function sebagai argument
sayGoodBye("Hilman", function (string $name):string {
    return strtoupper($name);
});

//variabel anonymous function
$toUpperFunction = function (string $name):string {
    return strtoupper($name);
};

sayGoodBye("Hilman",$toUpperFunction);

//memanggil variabel diluar anonymous function
$firstName = "Hilman";
$lastName = "Fauzi";

$sayHelloHilman = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloHilman();

