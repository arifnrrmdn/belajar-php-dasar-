<?php

function sum($bil1, $bil2){
    $result = $bil1 + $bil2;
    return $result;
}

$total = sum(10,10);
var_dump($total);

$total = sum(100,100);
var_dump($total);

function getFinalValue(int $value){
    if($value >= 80){
        return 'A';
    }else if($value >= 70){
        return 'B';
    }else if($value >= 60){
        return 'C';
    }else{
        return 'D';
    }
}

$total = getFinalValue(75);
var_dump($total);

//return value
function tambah($bil1, $bil2): int
{
    $result = $bil1 + $bil2;
    return $result;
}

$total = sum(10,10);
var_dump($total);

function getValue(int $value): string
{
    if($value >= 80){
        return 'A';
    }else if($value >= 70){
        return 'B';
    }else if($value >= 60){
        return 'C';
    }else{
        return 'D';
    }
}

$total = getFinalValue(75);
var_dump($total);