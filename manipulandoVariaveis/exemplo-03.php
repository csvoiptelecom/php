<?php
//

$nome = "joao";
echo $nome;

unset($nome);

echo "<br/>";
echo "variavel é";

$nome = "gisele";

if(isset($nome)){
    echo "<br/>";
    echo "Meu nome agora é", $nome;
}

