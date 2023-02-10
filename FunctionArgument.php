<?php

function sayHello($name){
    echo "Hello $name" . PHP_EOL;
}

sayHello("iif");
sayHello("hilman");


function sum(int $bil1, int $bil2){
    $total = $bil1 + $bil2;
    echo "Hasil dari $bil1 + $bil2 = $total" . PHP_EOL;
}

sum(100,100);
sum("100","100");
sum(true,false);

function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",",$values) . " = $total" . PHP_EOL;
}

sumAll(1,2,3,4,5);
$nilai = [70,68,90,70];
sumAll(...$nilai);

