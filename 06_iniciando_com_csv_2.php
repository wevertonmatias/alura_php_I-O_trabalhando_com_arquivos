<?php

$frases = file('frases.txt');
$frasesNovas = file('frases.novas.txt');

$arquivoCsv = fopen('frases_2.csv', 'w');

foreach($frases as $frase){
    $linha = [trim($frase), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
//    fgetcsv()
}

foreach($frasesNovas as $fraseNova){
    $linha = [trim($fraseNova), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
//    fgetcsv()
}

fclose($arquivoCsv);