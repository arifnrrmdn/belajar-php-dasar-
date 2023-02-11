<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Hilman", "strtoupper");
sayHello("Hilman","strtolower");

//anonymous function
sayHello("Hilman",function (string $name): string {
    return strtoupper($name);
});

//arrow function
sayHello("Hilman", fn($name) => strtolower($name));