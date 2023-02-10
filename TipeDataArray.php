<?php

$values = array(1,2,3,4);
var_dump($values);

$names = ["Arif", "Nur", "Ramadhan"];
var_dump($names);

//mengakses data index ke 0
var_dump($names[0]);

//merubah data index ke 1
$names[1] = "Kresna";

var_dump($names);

//menambah data array
$names[] = "Wijaya";
$names[] = "Jayabaya";

var_dump($names);

//menhapus data array
unset($names[2]);
var_dump($names);

//menampilkan jumlah data pada array
var_dump(count($names));

//map
$iifrmdn = array(
    "id" => "iifrmdn",
    "name" => "Arif Nur Ramadhan",
    "age" => 18
);

$abdul = array(
    "id" => "abdul",
    "name" => "Abdul Somad",
    "age" => 44
);

var_dump($iifrmdn);
var_dump($abdul);

//array didalam array
$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30,
    "address" => [
        "city" => "Jakarta",
        "country" => "Indonesia"
    ]
);

var_dump($eko);
