<?php

//single quote
echo 'Name : ';
echo 'Arif Nur Ramadhan';

echo "\n";

//double quote
echo "Name : ";
echo "Arif\n Nur\t Ramadhan\t";

//heredoc
echo <<<NAMA
\nIni adalah contoh yang
sangat panjang
multiline string
sangat mantap
NAMA;

//nowdoc
echo <<<'TEXT'
\nIni adalah contoh yang
sangat panjang
multiline string
sangat mantap
TEXT;
