<?php
//tipos basicos
$nomeEmpresa = "csvoip telecom";
$nomeSite = '';
$ano = "1990";
$salario = 5050.99;
$bloqueado = false;
///////////////////

//tipos compostas
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];
echo "<br/>";

$nascimento = new DateTime();

//var_dump($nascimento);
echo "<br/>";
///////////////////

$arquivo = fopen("manipulandoVariaveis.php", "r");

//var_dump($arquivo);

$nulo = NULL;


//$nome = (int)$_GET["usuario"];
//var_dump($nome);
$ip = $_SERVER["REMOTE_ADDR"];
//var_dump($ip);

$nomeArquivo = $_SERVER["SCRIPT_NAME"];
var_dump($nomeArquivo);


