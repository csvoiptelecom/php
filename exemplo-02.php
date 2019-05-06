<?php

$receberjson = '[{"nome":"joao Cesar","idade":47},{"nome":"Gisele Maria","idade":39}]';
$dados = json_decode($receberjson, true);
var_dump($dados);
