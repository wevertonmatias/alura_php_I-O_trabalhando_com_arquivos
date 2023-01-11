<?php

$contexto = stream_context_create([
   'http' => [
       'method' => 'POST',
       'content' => 'Teste do corpo da requisicao',
        'header' => ["X-from: PHP","content-type: text/plain"]
   ]
]);

echo file_get_contents('http://httpbin.org/post', false, $contexto);