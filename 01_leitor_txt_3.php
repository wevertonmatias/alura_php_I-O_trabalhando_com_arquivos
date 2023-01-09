<?php

$arquivo = file_get_contents('frases.txt');

echo $arquivo;

echo PHP_EOL . '********************'. PHP_EOL;

$arquivoArray = file('frases.txt');
var_dump($arquivoArray);