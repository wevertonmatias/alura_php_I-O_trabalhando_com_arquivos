<?php

$arquivo = fopen('frases.txt', 'r');

$arquivoTamanho = filesize('frases.txt');

$arquivoString = fread($arquivo, $arquivoTamanho);

echo $arquivoString;

fclose($arquivo);