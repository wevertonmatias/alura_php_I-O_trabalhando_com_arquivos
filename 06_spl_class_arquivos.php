<?php

//$arquivoCursosCsv = new SplFileObject('frases.csv');
$arquivoCursosCsv = new SplFileObject('frases_2.csv');

while(!$arquivoCursosCsv->eof()){
    $linha = $arquivoCursosCsv->fgetcsv(';');
    echo utf8_encode($linha[0]) .PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivoCursosCsv->getCTime());
echo $data->format('d/m/Y');