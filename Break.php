<?php

$counter = 1;

while(true){
    echo "ini adalah loop ke-" . $counter . PHP_EOL;
    $counter++;

    if($counter > 10){
        break;
    }

}

$counter = 10;

while(true){
    echo "ini adalah loop ke-" . $counter . PHP_EOL;
    $counter--;

    if($counter < 1){
        break;
    }
}


