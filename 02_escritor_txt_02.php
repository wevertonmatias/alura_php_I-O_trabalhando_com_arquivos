<?php

$arquivo = fopen('frases_novas.txt', 'a');
$frase = "\n02 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
fwrite($arquivo, $frase);
$frase = PHP_EOL.'03 - Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
fwrite($arquivo, $frase);

fclose($arquivo);