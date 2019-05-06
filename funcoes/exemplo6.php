<?php

$pessoa = array(
    'nome'=>"joao cesar",
    'idade'=> 47
);
    foreach($pessoa as &$valor){
        if(gettype($valor) === 'integer') $valor +=10;

        echo $valor. "<br>";

    }
        print_r($pessoa);
