<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}

$functionyangakandipanggil = "foo";
$functionyangakandipanggil(); //memanggil variabel function

$functionyangakandipanggil = "bar";
$functionyangakandipanggil();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name):string {
    return "Sample $name" . PHP_EOL;
}

sayHello("Iif","sampleFunction");
sayHello("Iif","strtoupper");
sayHello("Iif","strtolower");