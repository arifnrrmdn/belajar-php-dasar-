<?php

$nilai = 'A';

switch ($nilai) {
    case 'A':
        echo "Anda lulus dengan sangat baik";
        break;
    case 'B':
    case 'C':
        echo "Anda lulus";
    case 'D':
        echo "Anda tidak lulus";
}
