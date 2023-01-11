<?php

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá mundo!'.PHP_EOL);

fwrite(STDOUT, 'Olá mundo com constante.'.PHP_EOL);

$tele2 = fopen('php://stderr', 'w');
fwrite($tele2, 'Saída de erro.'.PHP_EOL);
fwrite(STDERR, 'Saída de erro com constante.'.PHP_EOL);

$frases = fopen('zip://arquivos.zip#frases_novas.txt', 'r');

stream_copy_to_stream($frases, STDOUT);