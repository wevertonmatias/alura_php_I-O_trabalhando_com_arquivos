<?php

require_once 'MeuFiltro.php';

stream_filter_register('alura.lorem', MeuFiltro::class);

$arquivo = fopen('frases.txt', 'r');
stream_filter_append($arquivo, 'alura.lorem');

echo fread($arquivo, filesize('frases.txt'));

fclose($arquivo);