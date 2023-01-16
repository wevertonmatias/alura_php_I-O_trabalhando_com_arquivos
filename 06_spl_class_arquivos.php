<?php

$arquivoCursosCsv = new SplFileObject('frases.csv');

while(!$arquivoCursosCsv->eof()){
    $linha = $arquivoCursosCsv.fgetcsv(';');
    echo $linha[0] .PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivoCursosCsv->getCTime());
echo $data->format('d/m/Y');