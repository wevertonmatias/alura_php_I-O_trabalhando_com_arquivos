<?php

$frases = file('frases.txt');
$frasesNovas = file('frases.novas.txt');

$arquivoCsv = fopen('frases_2.csv', 'w');

foreach($frases as $frase){
//    $linha = [trim($frase), 'Sim'];
    $linha = [trim(utf8_decode($frase)), 'Sim'];
    fputcsv($arquivoCsv, $linha, ';');
//    fgetcsv()
}

fclose($arquivoCsv);

foreach($frasesNovas as $fraseNova){
    $linha = [trim(utf8_decode($fraseNova)), 'Não'];
    fputcsv($arquivoCsv, $linha, ';');
//    fgetcsv()
}

fclose($arquivoCsv);