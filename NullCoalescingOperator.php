<?php

$data = [
    "action" => "create"
];

if (isset($data["action"])){
    $action = $data["action"];
}else{
    $action = "nothing";
}

//Null coalescing operator ??
//$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;
