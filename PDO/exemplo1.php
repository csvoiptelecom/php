<?php

$BDconn = new PDO("mysql:dbname=mailling; host=localhost", "root", "");

$stmt = $BDconn->prepare("SELECT * FROM tb_telefone ORDER BY telefones");

$stmt->execute();

$resultados = $stmt->fetchall(PDO::FETCH_ASSOC);

//while($resultados)

print_r($resultados);

