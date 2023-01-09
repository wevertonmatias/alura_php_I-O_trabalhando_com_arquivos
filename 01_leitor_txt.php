<?php

$arquivo = fopen('frases.txt', 'r');

while(!feof($arquivo)){
    $frase = fgets($arquivo);
    echo $frase;
}

fclose($arquivo);