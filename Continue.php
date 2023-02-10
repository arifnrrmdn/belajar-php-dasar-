<?php

for($counter = 0; $counter <= 100; $counter++){
    if($counter % 2 == 0){
        echo $counter . " adalah Bilangan Genap" . PHP_EOL;
        //continue;
    }else{
        //echo $counter . " adalah Bilangan Ganjil" . PHP_EOL;
        continue;
    }
}
