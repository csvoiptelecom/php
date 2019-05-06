<?php

$conn = new mysqli("localhost", "root", "", "DBphp7");

    if($conn->connect_error){
        echo "Conexão com problemas....." .$conn->connect_error;
    }

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$dados = array();    

while ($row = $result->fetch_assoc()) {

    array_push($dados, $row);        

    }

   echo json_encode($dados);

