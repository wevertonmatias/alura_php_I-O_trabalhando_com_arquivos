<?php

//$teclado = fopen('php://stdin', 'r');

$novaFrase = trim(fgets(STDIN));

file_put_contents('frases.txt', "\n{$novaFrase}", FILE_APPEND);