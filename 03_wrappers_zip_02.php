<?php

$arquivo = fopen('frases.txt', 'r');

stream_filter_append($arquivo, 'string.toupper');

echo fread($arquivo, filesize('frases.txt'));