<?php
    
    $nome1 = array();
    
    array_push($nome1, array(
        "nome"=>"joao cesar dos santos pereira",
        "idade"=> 47,
        "endereco"=>"Rua felipe silvestre, 39",
        "telefone"=>"31988682501",
            "nome"=>"Gisele Maria Alves de Almeida",
            "idade"=> 39,
            "endereco"=>"Rua felipe silvestre, 39",
            "telefone"=>"31986266727",
                "nome"=>"Aline Loren Almeida Pereira",
                "idade"=> 18,
                "endereco"=>"Rua felipe silvestre, 39",
                "telefone"=>"31993250600",
    ));
      //  foreach($nome1 as $key => $valor);
      //  print_r($nome1);
      //  echo "<br>";
      //  print_r($nome2);
       // echo "<br>";
       // print_r($nome3);

      echo  json_encode($nome1);