<?php

$frases = file('frases.txt');
$frasesNovas = file('frases_novas.txt');

$arquivoCsv = fopen('frases.csv', 'w');

foreach($frases as $frase){
    $linha = [trim($frase), 'Sim'];
    fwrite($arquivoCsv, implode(';', $linha).PHP_EOL);
}

foreach($frasesNovas as $fraseNova){
    $linha = [trim($fraseNova), 'Não'];
    fwrite($arquivoCsv, implode(';', $linha).PHP_EOL);
}

fclose($arquivoCsv);