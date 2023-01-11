<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://arquivos_2.zip#frases_2.txt', false, $contexto);


//fopen('arquivo', 'modo', false, $contexto);