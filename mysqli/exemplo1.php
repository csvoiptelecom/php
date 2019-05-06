<?php
$conn = new mysqli("localhost", "root", "", "DBphp7");

if($conn->connect_error){

    echo "conexao com problemas.........<br>";
    echo "Verifique os dados....... Grato!!!";

    
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUE(?, ?)");

$stmt-> bind_param("ss", $login, $pass);

$login = "root";
$pass = "123456";
$stmt->execute(); 

$login = "joao";
$pass = "oi lindao";
$stmt->execute();

