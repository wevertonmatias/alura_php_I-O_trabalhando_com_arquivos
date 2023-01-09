<?php

$arquivo = fopen('frases_novas.txt', 'w');
$frase = '01 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
fwrite($arquivo, $frase);

fclose($arquivo);