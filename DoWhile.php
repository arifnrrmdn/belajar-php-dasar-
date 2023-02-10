<?php

$counter = 1;

do {
    echo "ini adalah loop ke-" . $counter . PHP_EOL;
    $counter++;
}while($counter <= 10);

$counter = 10;

do {
    echo "ini adalah loop ke-" . $counter . PHP_EOL;
    $counter--;
}while($counter >= 1);
