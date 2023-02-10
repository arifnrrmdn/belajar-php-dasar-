<?php

$names = ["Arif", "Nur", "Ramadhan"];

foreach ($names as $name){
    echo "Hello $name" . PHP_EOL;
}

foreach ($names as $index => $name){
    echo "Data ke $index = " . $name . PHP_EOL;
}

$person = [
    "first_name" => "Arif",
    "middle_name" => "Nur",
    "last_name" => "Ramadhan"
];

foreach ($person as $key => $value){
    echo "$key = $value" . PHP_EOL;
}
