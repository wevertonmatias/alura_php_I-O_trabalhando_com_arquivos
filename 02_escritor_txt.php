<?php

$arquivo = fopen('frases_novas.txt', 'w');
$frase = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
fwrite($arquivo, $frase);

fclose($arquivo);