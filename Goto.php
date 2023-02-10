<?php

goto b;
echo "Hello A" . PHP_EOL;   //ini akan diabaikan/loncar

b:
echo "Hello B" . PHP_EOL;


//pada loop
$counter = 1;

while(true){
    echo "ini adalah loop ke-$counter" . PHP_EOL;
    $counter++;

    if($counter > 10){
        goto end;
    }
}

end:
echo "Loop berhenti" . PHP_EOL;

